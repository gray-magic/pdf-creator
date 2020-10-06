<?php

class collector
{
    private $Imgs = array();
    function __construct()
    {
        try {
            $Path = "img/";
            $iter = new \DirectoryIterator($Path);
            $Tmp = array();
            foreach ($iter as $file) {
                if (!$file->isDot()) {
                    $File_Name = $file->getFilename();
                    $File_Infos = new \SplFileInfo($Path . $File_Name);
                    $Extension = $File_Infos->getExtension();
                    if ($Extension == 'jpg') {
                        $id = str_replace('.' . $Extension, '', $File_Name);
                        $Tmp[intval($id)] = $Path . $File_Name;
                    }
                }
            }

            $max = count($Tmp);
            for ($i = 1; $i <= $max; $i++) {
                $this->Imgs[$i] = $Tmp[$i];
            }
        } catch (\Exception $th) {
            echo $th->getMessage();
        }
    }

    function Get_Max()
    {
        return count($this->Imgs);
    }

    function Get_Images()
    {
        try {
            $output = "";
            $cpt = 1;

            foreach ($this->Imgs as $key => $value) {
                $output .= '<div onclick="Preview(\'' . $value . '\');"><div class="title">Page ' . $cpt . '&#160;(' . $value . ')</div><img src="' . $value . '" /></div>';
                $cpt++;
            }
            return $output;
        } catch (\Exception $th) {
            echo $th->getMessage();
        }
    }
}
