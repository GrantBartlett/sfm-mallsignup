<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "Last Chance! Makeup Giveaway",
                "excerpt" => "Win an amazing brand new makeup collection from Flormar. It's quick and easy to enter but do it now before it's too late!",
                "title_catch" => "Last Chance! Makeup Giveaway",
                "url" => "http://www.saudifashionmagazine.com/sfm-plus/offers/win-a-fabulous-make-up-kit-from-flormar/",
                "image" => "/images/comp_flormar.png",
                "category" => "Competition"
            ),
            array(
                "title" => "WIN A Steve Madden Handbag",
                "excerpt" => "This week we’re giving away the bag that EVERYONE wants (including the entire SFM team)! Are you the lucky winner?",
                "title_catch" => "WIN A Steve Madden Handbag",
                "url" => "http://www.saudifashionmagazine.com/sfm-plus/offers/win-a-steve-madden-handbag/",
                "image" => "/images/comp_stevemadden.png",
                "category" => "Competition"
            )
        )
    );
?>

<table class="container">
    <tr>
        <td>
            <table class="row">
                <tr>

                    <?php foreach ($data['articles'] as $k => $v) : ?>
                    <td class="wrapper <?php if($k == '1'){ echo 'last'; } ?>">
                        <table class="six columns">
                            <tr>
                                <td class="weekly feature-article">
                                    <?php if($v['image']):?>
                                        <?php if($v['title_catch']) :?>
                                            <div style="margin: 25px;">
                                                <h5 style="font-size: 18px; text-align: center;">
                                                    <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><singleline><?= $v['title_catch']; ?></singleline></a>
                                                </h5>
                                            </div>
                                        <?php endif; ?>
                                        <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                            <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" height="195" alt="<?= $v['title']; ?>" class="center"></a>
                                        </div>
                                    <?php endif; ?>

                                    <div style="clear:both;">
                                        <div style="margin: 10px;"><p><multiline><?= $v['excerpt'];?></multiline></p></div>
                                        <div style="margin: 10px;text-align: right;"><p style="text-align: right;"><multiline><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $enternow; ?></a></p></multiline></div>
                                    </div>
                                </td>
                                <td class="expander"></td>
                            </tr>
                        </table>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>

        </td>
    </tr>
</table>