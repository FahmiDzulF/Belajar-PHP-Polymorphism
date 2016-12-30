<?php    
 abstract class AlQuran 
 {  
	abstract public function Jenis();  
    abstract public function Harga();  
 }  
   
 class Rainbow extends AlQuran 
 {  
    public function Jenis() 
	{  
		return "Versi Quran Rainbow <br/>";  
    }  
             
	public function Harga() 
	{  
        return "Harga AlQuran versi Rainbow Rp.70.000,-<br/>";  
    } 
}  
   
 class Tajwid extends AlQuran 
 {  
    public function Jenis() 
    {  
        return "Versi Tajwid<br/>";  
    }  
             
	public function Harga()
	{  
       	return "Harga AlQuran versi Rainbow Rp.90.000,-<br/>";  
    }   
}

$rainbow = new Rainbow;
$tajwid  = new Tajwid;

echo"<b>Jenis Qur'an : </b><br/>";
echo $rainbow->Jenis();
echo $rainbow->Harga();

echo"<br/>";

echo "<b>Jenis Qur'an : </b><br/>";
echo $tajwid->Jenis();
echo $tajwid->Harga();