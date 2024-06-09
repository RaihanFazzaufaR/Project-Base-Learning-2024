<?php

namespace Tests\Unit;

use App\Models\UserAccountModel;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_homepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_guest_cannot_access_penduduk(): void
    {
        $response = $this->get('/penduduk');

        $response->assertStatus(200);
    }

    public function test_admin_can_create_penduduk(): void
    {
        $admin = UserAccountModel::find(1);
        $response = $this->actingAs($admin)->post(
            '/admin/kependudukan/',
            [
                'nkk' => '0000000000000001',
                'kepalaKeluarga' => '0000000000000001',
                'rt' => '01',
                'alamat' => 'RW 3',
                'penduduk' => [
                    [
                        'nik' => '0000000000000002',
                        'nama' => 'Admin2',
                        'email' => 'testemail2@gmail.com',
                        'tempatLahir' => 'Jakarta',
                        'tanggalLahir' => '2001-01-01',
                        'jenisKelamin' => 'L',
                        'agama' => 'lainnya',
                        'pekerjaan' => 'mahasiswa',
                        'statusPernikahan' => 'belum',
                        'kewarganegaraan' => 'WNA',
                        'statusPenduduk' => 'penduduk tidak tetap',
                        'jabatan' => 'Tidak Ada',
                        'gaji' => 0,
                        'noHp' => '0',
                    ],
                ],
            ]
        );
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }
}
