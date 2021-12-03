<?php
//CTG Online-216. Mahfuz Kamal
//Make a function of convatting US dollar, Canadian dollar, pound in Bangladeshi money

function currencyconverer($currency,$amount){

                      if($currency == "dollar"){

                        $bdt = $amount * 85.75;
                        $amount = $bdt;
                        return "{$amount} BDT";
                      }
                      elseif($currency == "canadian dollar"){

                        $bdt = $amount * 67.20;
                        $amount = $bdt;
                        return "{$amount} BDT";
                      }
                      elseif($currency == "pound"){

                        $bdt = $amount * 114.20;
                        $amount = $bdt;
                        return "{$amount} BDT";
                      }
                      else{
                          return "Invalid Currency";
                      }

}
            $currency = "pound";
            $amount = 50;
            echo currencyconverer($currency, $amount);


?>