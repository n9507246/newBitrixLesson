<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
    <div class="header-main-menu hidden-xs">
        <nav id="primary-menu">
            <ul class="main-menu text-right">
                <?php foreach ($arResult as $item): ?>
                    <li>
                        <a href="<?= $item['LINK'] ?>"<?= $item["SELECTED"] ? 'style="color:#009cbb"' : ''; ?>>
                            <?= $item['TEXT'] ?>

                            <?php if (!empty($item['subitems'])): ?>
                            <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
                        <?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>

