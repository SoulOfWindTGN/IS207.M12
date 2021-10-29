<?php
    class nhanvien
    {
        private $manv;
        private $tennv;
        private $songaylam;
        private $luongngay;

        public function Gan($ma, $ten, $songay, $luongngay)
        {
            $this -> manv = $ma;
            $this -> tennv = $ten;
            $this -> songaylam = $songay;
            $this -> luongngay = $luongngay;
        }

        public function InNhanVien()
        {
            echo "Mã nhân viên: ".$this->manv."<br>";
            echo "Tên nhân viên: ".$this->tennv."<br>";
            echo "Số ngày làm: ".$this->songaylam."<br>";
            echo "Lương ngày: ".$this->luongngay."<br>";
        }

        public function TinhLuong()
        {
            return $this->luongngay * $this->songaylam;
        }
    }

    class nhanvienQL extends nhanvien
    {
        private $PhuCap = 2000;

        public function InNhanVien()
        {
            parent::InNhanVien();
            echo "Phụ cấp: ".$this->PhuCap."<br>";
        }

        public function TinhLuong()
        {
            $luongthang = parent::TinhLuong();
            return $luongthang + $this->PhuCap;
        }
    }
?>