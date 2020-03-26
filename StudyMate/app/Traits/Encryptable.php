namespace App\Traits

trait Encryptable{

    public function($key) 
    {
        $value = parent::getAttribute($key);

        if ($value != null){
            if (in_array($key, $this->encryptable)){
                $value = Crypt::decrypt($value);
            }
        }
    }
}