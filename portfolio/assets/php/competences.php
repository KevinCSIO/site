<?php
$data = yaml_parse_file("assets/yaml/competences.yaml");
?>

<section class="competences" id="competences">
    <div class="comp">
        <?php
        echo '<h2 class="titre5">'.($data["title"]).'</h2>';
        echo '<p>'.($data["text1"]).'<br>'.($data["text2"]).'</p>';?>
    </div>
    <div class="langues">
        <?php
        echo '<h3 class="titre6">'.($data["title2"]).'</h3>';?>
        <div class="niveau">
            <div class="anglais">
                <?php
                echo '<p>'.($data["anglais"]).' : '.($data["anglais2"]).'</p>';?>
                <svg xmlns="http://www.w3.org/2000/svg" width="174" height="33" viewBox="0 0 174 33" fill="none">
                    <path d="M52.5 1.53464L55.9563 11.5641L56.0724 11.9012H56.429H67.5289L58.5747 18.0351L58.2604 18.2503L58.3845 18.6105L61.8206 28.5812L52.7826 22.3899L52.5 22.1964L52.2174 22.3899L43.1794 28.5812L46.6155 18.6105L46.7396 18.2503L46.4253 18.0351L37.4711 11.9012H48.571H48.9276L49.0437 11.5641L52.5 1.53464Z" fill="#EBFF00" stroke="black"/>
                    <path d="M87 1.57505L90.3426 11.5599L90.4568 11.9012H90.8167H101.591L92.8875 18.0389L92.5833 18.2534L92.7015 18.6063L96.034 28.5612L87.2881 22.3938L87 22.1906L86.7119 22.3938L77.966 28.5612L81.2985 18.6063L81.4167 18.2534L81.1125 18.0389L72.4087 11.9012H83.1833H83.5432L83.6574 11.5599L87 1.57505Z" fill="#EBFF00" stroke="black"/>
                    <path d="M121.5 1.53464L124.956 11.5641L125.072 11.9012H125.429H136.529L127.575 18.0351L127.26 18.2503L127.385 18.6105L130.821 28.5812L121.783 22.3899L121.5 22.1964L121.217 22.3899L112.179 28.5812L115.615 18.6105L115.74 18.2503L115.425 18.0351L106.471 11.9012H117.571H117.928L118.044 11.5641L121.5 1.53464Z" fill="#D9D9D9" stroke="black"/>
                    <path d="M17 1.57505L20.3426 11.5599L20.4568 11.9012H20.8167H31.5913L22.8875 18.0389L22.5833 18.2534L22.7015 18.6063L26.034 28.5612L17.2881 22.3938L17 22.1906L16.7119 22.3938L7.96597 28.5612L11.2985 18.6063L11.4167 18.2534L11.1125 18.0389L2.40869 11.9012H13.1833H13.5432L13.6574 11.5599L17 1.57505Z" fill="#EBFF00" stroke="black"/>
                    <path d="M157 1.57505L160.343 11.5599L160.457 11.9012H160.817H171.591L162.887 18.0389L162.583 18.2534L162.701 18.6063L166.034 28.5612L157.288 22.3938L157 22.1906L156.712 22.3938L147.966 28.5612L151.299 18.6063L151.417 18.2534L151.113 18.0389L142.409 11.9012H153.183H153.543L153.657 11.5599L157 1.57505Z" fill="#D9D9D9" stroke="black"/>
                    </svg>
            </div>
            <div class="italien">
                <?php
                echo '<p>'.($data["italien"]).' : '.($data["italien2"]).'</p>';?>
                <svg xmlns="http://www.w3.org/2000/svg" width="174" height="33" viewBox="0 0 174 33" fill="none">
                    <path d="M52.5 1.53464L55.9563 11.5641L56.0724 11.9012H56.429H67.5289L58.5747 18.0351L58.2604 18.2503L58.3845 18.6105L61.8206 28.5812L52.7826 22.3899L52.5 22.1964L52.2174 22.3899L43.1794 28.5812L46.6155 18.6105L46.7396 18.2503L46.4253 18.0351L37.4711 11.9012H48.571H48.9276L49.0437 11.5641L52.5 1.53464Z" fill="#EBFF00" stroke="black"/>
                    <path d="M87 1.57505L90.3426 11.5599L90.4568 11.9012H90.8167H101.591L92.8875 18.0389L92.5833 18.2534L92.7015 18.6063L96.034 28.5612L87.2881 22.3938L87 22.1906L86.7119 22.3938L77.966 28.5612L81.2985 18.6063L81.4167 18.2534L81.1125 18.0389L72.4087 11.9012H83.1833H83.5432L83.6574 11.5599L87 1.57505Z" fill="#EBFF00" stroke="black"/>
                    <path d="M121.5 1.53464L124.956 11.5641L125.072 11.9012H125.429H136.529L127.575 18.0351L127.26 18.2503L127.385 18.6105L130.821 28.5812L121.783 22.3899L121.5 22.1964L121.217 22.3899L112.179 28.5812L115.615 18.6105L115.74 18.2503L115.425 18.0351L106.471 11.9012H117.571H117.928L118.044 11.5641L121.5 1.53464Z" fill="#D9D9D9" stroke="black"/>
                    <path d="M17 1.57505L20.3426 11.5599L20.4568 11.9012H20.8167H31.5913L22.8875 18.0389L22.5833 18.2534L22.7015 18.6063L26.034 28.5612L17.2881 22.3938L17 22.1906L16.7119 22.3938L7.96597 28.5612L11.2985 18.6063L11.4167 18.2534L11.1125 18.0389L2.40869 11.9012H13.1833H13.5432L13.6574 11.5599L17 1.57505Z" fill="#EBFF00" stroke="black"/>
                    <path d="M157 1.57505L160.343 11.5599L160.457 11.9012H160.817H171.591L162.887 18.0389L162.583 18.2534L162.701 18.6063L166.034 28.5612L157.288 22.3938L157 22.1906L156.712 22.3938L147.966 28.5612L151.299 18.6063L151.417 18.2534L151.113 18.0389L142.409 11.9012H153.183H153.543L153.657 11.5599L157 1.57505Z" fill="#D9D9D9" stroke="black"/>
                    </svg>
            </div>
        </div>
    </div>
    <div class="developpement">
        <div class="titre_dev">
        <?php
        echo '<h3 class="titre7">'.($data["title3"]).'</h3>';?>
        </div>
        <div class="niveau2">
            <div class="nsi">
            <?php
            echo '<p>'.($data["python"]).' : '.($data["python2"]).'</p>';?>
            <progress value="60" max="100"></progress>
            <?php
            echo '<p>'.($data["sql"]).' : '.($data["sql2"]).'</p>';?>
            <progress value="60" max="100"></progress>
            </div>
            <div class="bts">
            <?php
            echo '<p>'.($data["html"]).' : '.($data["html2"]).'</p>';?>
            <progress value="40" max="100"></progress>
            <?php
            echo '<p>'.($data["css"]).' : '.($data["css2"]).'</p>';?>
            <progress value="40" max="100"></progress>
            </div>
            <div class="bts2">
            <?php
            echo '<p>'.($data["php"]).' : '.($data["php2"]).'</p>';?>
            <progress value="20" max="100"></progress>
            <?php
            echo '<p>'.($data["js"]).' : '.($data["js2"]).'</p>';?>
            <progress value="20" max="100"></progress>
            </div>
        </div>
    </div>
    <div class="certif">
        <?php
        echo '<h3 class="titre8">'.($data["title4"]).'</h3>';?>
        <?php
            echo '<p>'.($data["pix"]).' : '.($data["pix2"]).'</p>';?>
    </div>
</section>