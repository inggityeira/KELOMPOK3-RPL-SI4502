<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DonasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group donasi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Selamat
Datang.')
                    ->clickLink('MASUK')
                    ->assertPathIs('/masuk')
                    ->type('email', 'individu@laborare.com')
                    ->type('password', 'individu1234')
                    ->press('Masuk')
                    ->assertPathIs('/home')
                    ->clickLink('DONASI')
                    ->assertPathIs('/listdonasi-Ind');

            $browser->waitForText('Bantuan Medis Darurat', 10)
                    ->with('.card:contains("Bantuan Medis Darurat")', function (Browser $card) {
                        $card->clickLink('DETAIL');
                    })
                    ->assertPathIs('/donasi/detail/2')
                    ->clickLink('Donasi Sekarang!')
                    ->type('nominal', '15000')
                    ->type('pesan', 'Semoga bermanfaat ya.')
                    ->press('Donasi')
                    ->assertPathIs('/pembayaran/2')
                    ->clickLink('SELESAI')
                    ->assertPathIs('/listdonasi-Ind')
                    ->clickLink('Profil')
                    ->assertPathIs('/profil-Ind')
                    ->clickLink('Keluar')
                    ->assertPathIs('/');
        });
    }
}
