class LetterCounter
{
    public static function CountLettersAsString(string $params): string
    {
        $lowerString = strtolower($params);
        $arrayChars = str_split($lowerString);

        $chars = [];
        foreach($arrayChars as $arrayChar) {
            if($arrayChar !== ' ' && $arrayChar !== ',') {
                $chars[$arrayChar] = $chars[$arrayChar] . '*';
            }  
        }
        $stringChars = '';

        foreach($chars as $key => $value) {

            $string = $key . ':' . $value . ',';
            $stringChars = $stringChars . $string;
        }
        
        return substr_replace($stringChars ,"", -1);
    }
}