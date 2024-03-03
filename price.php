<?php
include("nav.php");
?>

<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        font-family: Arial, mm3, Helvetica, sans-serif;
        font-size: 17px;

    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }
</style>
</head>

<body>





    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">ဈေးနှုန်းတွက်ရန်</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row d-flex justify-content-center">
                        <div class="d-flex justify-content-around w-100">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">ဈေးနှုန်း</label>
                                    <input type="number" class="form-control" id="price" placeholder="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">တင်း</label>
                                    <input type="email" class="form-control" id="quantity" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-8 d-flex justify-content-center mt-3">
                            <button class="btn btn-success w-100" onclick="calculate()">တွက်ချက်ပါ</button>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <h6 class="" id="answer">Answer : </h6>

                </div>
            </div>
        </div>
    </div>


    <div class="container topHeight">
        <div class="d-flex justify-content-between mb-5">
            <h3 class="">ယနေ့ပဲဈေးနှုန်းများ</h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                ဈေးနှုန်းတွက်ရန်
            </button>

        </div>
        <table class="table text-center" id="priceTable">
            <tr>
                <th colspan="3">အမျိုးအစား</th>
                <th></th>
                <th></th>
                <th>တည်နေရာ</th>
                <th>မြို့နယ်</th>
                <th>Min</th>
                <th>Max</th>
                <th>ငွေကြေး</th>
                <th>ပမာဏ</th>
                <th>ယူနစ်</th>
                <th>ရက်စွဲ</th>
            </tr>


        </table>
        <div class="text-center d-flex justify-content-center mb-5 mt-3">
            <button id="loadMoreBtn" class="about_button wow animate__backInUp " data-wow-delay="0.6s">
                ပိုမိုကြည့်ရှုရန်
                <div class="arrow-wrapper">
                    <div class="arrow"></div>

                </div>
            </button>
        </div>
    </div>

    <!-- Include Bootstrap JS and your custom JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js/price.js"></script>
    <script>
        $(document).ready(function() {
            const rowsToShow = 10; // Number of rows to show initially
            let currentRowCount = rowsToShow;

            // Hide rows beyond the initial limit
            $('.table tr:gt(' + (rowsToShow - 1) + ')').hide();

            // Load more button click event
            $('#loadMoreBtn').click(function() {
                const totalRowCount = $('.table tr').length;
                const remainingRows = totalRowCount - currentRowCount;

                // Show next batch of rows
                $('.table tr:lt(' + (currentRowCount + rowsToShow) + ')').show();

                // Update current row count
                currentRowCount += rowsToShow;

                // Hide the button if no more rows to load
                if (currentRowCount >= totalRowCount) {
                    $('#loadMoreBtn').hide();
                }
            });
        });


        function calculate() {
            var price = document.getElementById('price').value;
            var quantity = document.getElementById('quantity').value;
            var answer = parseFloat(price) * parseFloat(quantity);

            document.getElementById('answer').innerHTML = "Answer: " + answer + " ကျပ်";
        }
    </script>
</body>

</html>