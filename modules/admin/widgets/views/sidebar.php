
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div> <a href="<?=\yii\helpers\Url::to(['user/logout'])?>">
                <img src="/<?=Yii::$app->params['backend_files']?>/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </a>
        </div>
        <div>
            <h4 class="logo-text">Rayyon travel admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/user'])?>">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Foydalanuvchilar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/menu'])?>">
                <div class="parent-icon"><i class="bx bxs-barcode"></i>
                </div>
                <div class="menu-title">Menular</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/tours'])?>">
                <div class="parent-icon"><i class="bx bxs-plane-alt"></i>
                </div>
                <div class="menu-title">Tur paketlar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/tours-category'])?>">
                <div class="parent-icon"><i class="bx bxs-sort-alt"></i>
                </div>
                <div class="menu-title">Tur paket kategoriyalari</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/hotel'])?>">
                <div class="parent-icon"><i class="bx bxs-hotel"></i>
                </div>
                <div class="menu-title">Mehmonxonalar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/contacts'])?>">
                <div class="parent-icon"><i class="bx bxs-contact"></i>
                </div>
                <div class="menu-title">Kontaktlar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/faq'])?>">
                <div class="parent-icon"><i class="bx bxs-quote-left"></i>
                </div>
                <div class="menu-title">FAQ (savollar va javoblar)</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/sponsors'])?>">
                <div class="parent-icon"><i class="bx bxs-hand-right"></i>
                </div>
                <div class="menu-title">Hamkorlar</div>
            </a>
        </li>

        <li>
            <a href="<?=\yii\helpers\Url::to(['/admin/testimonials'])?>">
                <div class="parent-icon"><i class="bx bxs-comment"></i>
                </div>
                <div class="menu-title">Mijozlarning izohlari</div>
            </a>
        </li>



    </ul>
    <!--end navigation-->
</div>