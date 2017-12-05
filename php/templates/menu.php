<?php foreach($GLOBALS['itensMenu'] as $keyItem => $itemMenu) { ?>
                <li<?php if($keyItem == $GLOBALS['action']) {?> class="active"<?php } ?>>
                    <a href="index.php?action=<?php echo $keyItem; ?>">
                        <p><?php echo $itemMenu; ?></p>
                    </a>
                </li>
<?php } ?>