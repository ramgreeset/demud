<?php
declare(strict_types=1);
namespace ParagonIE\Paserk\Tests\Operations;

use ParagonIE\Paserk\Operations\Wrap;
use ParagonIE\Paserk\Operations\Wrap\Pie;
use ParagonIE\Paseto\Keys\AsymmetricSecretKey;
use ParagonIE\Paseto\Keys\SymmetricKey;
use ParagonIE\Paseto\Protocol\Version1;
use ParagonIE\Paseto\Protocol\Version2;
use ParagonIE\Paseto\Protocol\Version3;
use ParagonIE\Paseto\Protocol\Version4;
use PHPUnit\Framework\TestCase;


/**
 * Class WrapTest
 * @package ParagonIE\Paserk\Tests\Operations
 *
 * @covers Wrap
 */
class WrapTest extends TestCase
{

    protected $v1 = [];
    protected $v2 = [];
    protected $v3 = [];
    protected $v4 = [];

    public function setUp(): void
    {
        $v1sk = AsymmetricSecretKey::generate(new Version1());
        $v2sk = AsymmetricSecretKey::generate(new Version2());
        $v3sk = AsymmetricSecretKey::generate(new Version3());
        $v4sk = AsymmetricSecretKey::generate(new Version4());

        $v1sym = SymmetricKey::generate(new Version1());
        $v2sym = SymmetricKey::generate(new Version2());
        $v3sym = SymmetricKey::generate(new Version3());
        $v4sym = SymmetricKey::generate(new Version4());

        $v1wk = SymmetricKey::generate(new Version1());
        $v2wk = SymmetricKey::generate(new Version2());
        $v3wk = SymmetricKey::generate(new Version3());
        $v4wk = SymmetricKey::generate(new Version4());

        $this->v1 = ['header' => 'k1', 'wk' => $v1wk, 'sk' => $v1sk, 'sym' => $v1sym];
        $this->v2 = ['header' => 'k2', 'wk' => $v2wk, 'sk' => $v2sk, 'sym' => $v2sym];
        $this->v3 = ['header' => 'k3', 'wk' => $v3wk, 'sk' => $v3sk, 'sym' => $v3sym];
        $this->v4 = ['header' => 'k4', 'wk' => $v4wk, 'sk' => $v4sk, 'sym' => $v4sym];
    }

    public function testWrapPie()
    {
        foreach ([$this->v1, $this->v2, $this->v3, $this->v4] as $vers) {
            /** @var SymmetricKey $sym */
            $sym = $vers['sym'];
            /** @var AsymmetricSecretKey $sk */
            $sk = $vers['sk'];

            $pie = new Pie($vers['wk']);
            $wrap = new Wrap($pie);

            $local = $wrap->localWrap($sym);
            $expect = $vers['header'] . '.local-wrap.pie.';
            $this->assertStringStartsWith($expect, $local);
            $unwrapLocal = $wrap->localUnwrap($local);
            $this->assertEquals(
                $sym->encode(),
                $unwrapLocal->encode(),
                'local-wrap ' . $vers['header']
            );

            $secret = $wrap->secretWrap($sk);
            $expect = $vers['header'] . '.secret-wrap.pie.';
            $this->assertStringStartsWith($expect, $secret);
            $unwrapSecret = $wrap->secretUnwrap($secret);
            $this->assertEquals(
                $sk->encode(),
                $unwrapSecret->encode(),
                'secret-wrap ' . $vers['header']
            );
        }
    }
}
