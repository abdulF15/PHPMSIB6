<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $universitas;

    public $mataKuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $universitas, $mataKuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->mataKuliah = $mataKuliah;

        $this->nilai = $nilai;
        $this->hitungGradePredikat();
        $this->hitungStatus();
    }

    public function hitungGradePredikat()
    {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 69) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Tidak Lulus';
        }
    }

    public function hitungStatus()
    {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
