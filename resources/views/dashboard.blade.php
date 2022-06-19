<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard - Crypto Fairy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="dashboard/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">

    <link href="dashboard/css/tag-basic-style.css" rel="stylesheet">

    <link rel="stylesheet" href="dashboard/css/jquery.multiselect.css">

    <!-- Template Stylesheet -->
    <link href="dashboard/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Crypto Fairy</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="dashboard/img/avatar.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Crypto Fairy v1.0 comming soon...</h6>
                                <small>1 hour ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Crypto Fairy v0.1 has been released!</h6>
                                <small>2 hours ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">This section under development</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="dashboard/img/avatar.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <form id="form">
                        <h6 class="mb-12">Specify your criteries</h6>
                            <div class="mb-3">
                                <label for="tag" class="col-sm-2 col-form-label">Special keys</label>
                                <div class="d-flex" data-tags-input-name="tag" id="tagBox"></div>
                            </div>
                            <div class="mb-3">
                                <label for="accountsFrom[]" class="col-sm-2 col-form-label">Top twitters</label>
                                <select class="form-select form-select-lg" name="accountsFrom[]" multiple id="accountsFrom">
                                    <option value="C++">C++</option>
                                    <option value="C#">C#</option>
                                    <option value="Java">Java</option>
                                    <option value="Objective-C">Objective-C</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="Perl">Perl</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Ruby on Rails">Ruby on Rails</option>
                                    <option value="Android">Android</option>
                                    <option value="iOS">iOS</option>
                                    <option value="HTML">HTML</option>
                                    <option value="XML">XML</option>
                                </select>
                            </div>
                            <button type="submit" id="btn" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="smb-4">Line Chart</h6>
                            <div id="prediction"></div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sales Chart End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Crypto Fairy</a> 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Template <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard/lib/chart/chart.min.js"></script>
    <script src="dashboard/lib/easing/easing.min.js"></script>
    <script src="dashboard/lib/waypoints/waypoints.min.js"></script>
    <script src="dashboard/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="dashboard/lib/tempusdominus/js/moment.min.js"></script>
    <script src="dashboard/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="dashboard/js/taggingJS/tagging.js"></script>
    <script src="dashboard/js/multiselect/jquery.multiselect.js"></script>
    <script>
        var my_custom_options = {
            "no-duplicate": false,
            "tags-input-name": "taggone",
            "edit-on-delete": false,
        };
        var t = $("#tagBox").tagging(my_custom_options);
        var $tag_box = t[0];
        $tag_box.tagging( "add", ["crypto", "#doge", "$mem"] );

        $('#accountsFrom').multiselect({
            columns: 1,
            placeholder: 'Select',
            search: true
        });

        $( "#form" ).submit(function(event){
            event.preventDefault();
            var _this = $(this);
            var hash = [];
            var cash = []; 
            var key = [];
            var accountsFrom = [];
            $('.tag input').each(function(index, element) {
                if($(this).val()[0] == '#') {
                    hash.push($(this).val());
                } else if($(this).val()[0] == '$') {
                    cash.push($(this).val());
                } else {
                    key.push($(this).val());
                }
            });
            console.log(hash,cash, key);
            $('.ms-options .selected input').each(function(index, element) {
                accountsFrom.push($(this).val());
            });
            console.log('Form', accountsFrom);

            // var {keywords, hashtags, cashtags} = splitTags($( "#tag" ).val());
            $.ajax({
                url : '{{route('update')}}',
                type : 'get',
                data : {
                        'accountsFrom' : accountsFrom,
                        'keywords' : key,
                        'hashtags' : hash,
                        'cashtags' : cash
                        },
                beforeSend : function(){
                    // Show image container
                    console.log('before')
                },
                success : function(response){
                    console.log('success');
                    console.log(response);
                },
                complete : function(data){
                    // display messgae on request completed
                    
                    console.log('completed');
                }
            });
        });

        var myChart2 = null;

        var ajax_call = function() {
           $.ajax({
                    url: '{{route('data')}}', // Url to which the request is send
                    type: "GET",             // Type of request to be send, called as method
                    data : "",
                    success: function(data)   // A function to be called if request succeeds
                    {
                        console.log('data', data);
                        var predText = data[0]['percentage'] !== undefined ? data[0]['percentage'] : '';
                        
                        var predClass;
                        if(data[0]['predicted'] !== undefined) {
                            predClass = data[0]['predicted'] == true ? 'green' : 'red';
                        } else {
                            predClass = '';
                        }

                        $('#prediction').html("<div style='color:" + predClass + "'>Percentage: "+ predText +"% </div>");

                        // Salse & Revenue Chart
                        if(myChart2 != null){
                            myChart2.destroy();
                        }
                        
                        if( data[0]['data'] !== undefined) {
                            var labels = [];
                            var prices = [];
                            
                            for (const [key, value] of Object.entries( data[0]['data'])) {
                                console.log(`${value.Close}`);
                                labels.push(timeConverter(value.OpenTime));
                                prices.push(value.Open);
                            }

                            var ctx2 = $("#salse-revenue").get(0).getContext("2d");
                            myChart2 = new Chart(ctx2, {
                                type: "line",
                                data: {
                                    labels: labels,
                                    datasets: [
                                        // {
                                        //     label: "Elon Musk twits",
                                        //     backgroundColor: "rgb(255, 0, 0, .5)",
                                        //     data: [15, null, 55, null, 70, 65, null],
                                        //     showLine: false
                                        // },

                                        {
                                            label: data[0]['coin'],
                                            data: prices,
                                            backgroundColor: "rgba(0, 156, 255, .3)",
                                            fill: true
                                        }
                                    ]
                                    },
                                options: {
                                    responsive: true
                                }
                            });
                        }
                    }
            });
        };
        var X = 30;

        var interval = 1000 * X; // where X is your every X sec
        ajax_call();
        setInterval(ajax_call, interval);

        function timeConverter(UNIX_timestamp){
            var a = new Date(UNIX_timestamp);
            var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            var year = a.getFullYear();
            var month = months[a.getMonth()];
            var date = a.getDate();
            var time = date + ' ' + month + ' ' + year ;
            return time;
        }
    </script>

    <!-- Template Javascript -->
    <script src="dashboard/js/main.js"></script>
</body>

</html>