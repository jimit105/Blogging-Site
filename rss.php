<?php
                $html = "";
                $url = "https://www.kdnuggets.com/feed";
                //https://www.sciencedaily.com/rss/matter_energy/engineering.xml
                $xml = simplexml_load_file($url);
                for($i = 0; $i < 10; $i++){
                    $title = $xml->channel->item[$i]->title;
                    $link = $xml->channel->item[$i]->link;
                    $description = $xml->channel->item[$i]->description;
                    $pubDate = $xml->channel->item[$i]->pubDate;
                    $pubDate = date_create($pubDate);
                    date_timezone_set($pubDate, timezone_open('Asia/Kolkata'));

                    $html .= "<hr><a href='$link'><h3 style='color: #007f96;'>$title</h3></a>";
                    $html .= "<p>$description</p>";
                    $html .= "<p style='color: #4a7077'>".date_format($pubDate, 'l, dS M Y, h:i:s a T')."</p>";
                    
                }
                echo $html;
                ?>