<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="../index.php">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">BIC</h2>
                </a>
            </li>


        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!-- <li class=" nav-item"><a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class=" nav-item"><a href="app-email.php"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.php"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.php"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="app-calender.php"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
            </li> -->
            <li class="<?php if ($activepage == "app-user-list") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-list.php"><i class="feather icon-users"></i><span class="menu-item" data-i18n="List"> المستخدمينٍ</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-university") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-university.php"><i class="feather icon-home"></i><span class="menu-item" data-i18n="List"> الجامعه</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-college") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-college.php"><i class="feather icon-book"></i><span class="menu-item" data-i18n="List"> الكليات</span></a>
            </li>
            <li class="<?php if ($activepage == "app-user-departments") {
                            echo "active";
                        } ?> nav-item"><a href="app-user-departments.php"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List"> الاقسام</span></a>
            </li>
            <li class="<?php if ($activepage == "app-Year") {
                            echo "active";
                        } ?> nav-item"><a href="app-Year.php"><i class="ficon feather icon-calendar"></i><span class="menu-item" data-i18n="List"> السنوات الدراسية </span></a>
            </li>
            
            <li class="<?php if ($activepage == "app-decisiondegree") {
                            echo "active";
                        } ?> nav-item"><a href="app-decisiondegree.php"><i class="ficon feather icon-layers"></i><span class="menu-item" data-i18n="List"> درجة القرار </span></a>
            </li>
            <li class="<?php if ($activepage == "app-Teacher") {
                            echo "active";
                        } ?> nav-item"><a href="app-Teacher.php"><i class="feather icon-users"></i><span class="menu-item" data-i18n="List"> الاساتذه </span></a>
            </li>
            <li class="<?php if ($activepage == "app-Material-list") {
                            echo "active";
                        } ?> nav-item"><a href="app-Material-list.php"><i class="feather icon-file-text"></i><span class="menu-item" data-i18n="List"> المواد </span></a>
            </li>
            
            <li class="nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="List">تقارير</span></a>
                    <ul class="menu-content">
                        <li class="<?php if ($activepage == "report-stu-count") {
                                echo "active";
                            } ?> nav-item"><a href="report-stu-count.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List"> اعداد الطلبة </span></a>
                        </li>
                        <li class="<?php if ($activepage == "report-PDegree") {
                                echo "active";
                            } ?> nav-item"><a href="report-PDegree.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List"> سعيات الطلبة </span></a>
                        </li>
                        
                    </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="List">الطلاب</span></a>
                    <ul class="menu-content">
                        <li class="<?php if ($activepage == "stu-by-excel") {
                                echo "active";
                            } ?> nav-item"><a href="app-Student-by-excel.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List"> Upload Student Excel File </span></a>
                        </li>
                        <li class="<?php if ($activepage == "Addstu") {
                                echo "active";
                            } ?> nav-item"><a href="app-Student-list.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List"> اضافة الطلاب </span></a>
                        </li>
                        
                    </ul>
            </li>

            <li class="<?php if ($activepage == "app-Grades-list") {
                            echo "active";
                        } ?> nav-item"><a href="app-Grades-list.php"><i class="feather icon-file"></i><span class="menu-item" data-i18n="List"> سجل الدرجات </span></a>
            </li>
            <li class="
                            nav-item"><a href="signout.php"><i class="feather icon-log-out
"></i><span class="menu-item" data-i18n="List"> تسجيل خروج </span></a>
            </li>


            <!-- <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                <ul class="menu-content">
                    <li><a href="card-basic.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a href="card-advance.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                    </li>
                    <li><a href="card-statistics.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                    </li>
                    <li><a href="card-analytics.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li><a href="card-actions.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                    </li>
                </ul>
            </li> -->



        </ul>
    </div>
</div>