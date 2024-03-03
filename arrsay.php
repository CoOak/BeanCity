<?php
include("nav.php");
?>
<div class="container topHeight" id="main">
    <div class="row">
        <div class="col-2 pal-menu vh-100">
            <div class="">
                <div class="">
                    <h5 class="mb-5 fw-bold">ရောဂါကာကွယ်ကုသဆေးများ</h5>
                </div>
                <ul class="list-group list-group-flush" id="myList">
                    <li class="pal-item ">
                        <a href="poethatsay.php" class="text-decoration-none active">
                            ပိုးသတ်ဆေးများ</a>
                    </li>
                    <li class="pal-item">
                        <a href="mhosay.php" class="text-decoration-none">မှိုဆေးများ</a>
                    </li>

                    <li class="pal-item active">
                        <a href="arrsay.php" class="text-decoration-none">ရွက်ဖျန်းအားဆေးများ</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-10">
            <div class="d-flex flex-wrap" id="pesticideList"></div>
        </div>
    </div>
</div>

<div class="container topHeight" id="detail" style="display: none">
    <div class="row">
        <div class="col-12 mb-5">
            <a href="arrsay.php" class="text-black text-decoration-none active">
                ရွက်ဖျန်းအားဆေးများ
            </a>
            <span class="">&nbsp; > &nbsp;</span>
            <a href="" class="text-decoration-none text-black fw-semibold" id="headerlink"></a>
        </div>
        <div class="col-1"></div>
        <div class="col-3">
            <div class="">
                <img src="" class="pdetailImg" id="pdetailImg" alt="" />
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <div class="">
                <h4 class="fw-bolder mb-5" id="name"></h4>
                <div class="pdetailTable">
                    <table>
                        <tbody>
                            <tr>
                                <th>Category</th>
                                <td>
                                    <a href="pesticide.html" class="text-decoration-none" id="category">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>အစွမ်းရှိပစ္စည်း</th>
                                <td id="aswan"></td>
                            </tr>
                            <tr>
                                <th>အာနိသင်ဖော်ပြချက်</th>
                                <td id="arnithin"></td>
                            </tr>

                            <tr>
                                <th>ဆေးနှုန်းထား</th>
                                <td id="sayhnone"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/arrsay.js"></script>
</body>

</html>