<?php
    $ch = curl_init();
    $url = "https://7a859ffcc3961df6e1c52d6dc93cf672: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@yourlibaasuae.myshopify.com/admin/api/2021-10/products.json";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resp = curl_exec($ch);
    if($e = curl_error($ch))
    {
        echo $e;                
    }
    else
    {
        $decoded = json_decode($resp, true);
        $products = $decoded["products"];
        foreach($products as $p)
        {
            $img_url = $p["images"][0]["src"];
            $title = $p["title"];
            echo "<div class=card>";
            echo "<img src=";
            echo $img_url;
            echo " height=350 width=auto />";
            echo "<p>".$title."</p>";
            echo "</div>";
        }
    }
?>