<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devise-width,initial-scale=1.0">
        <title>Admin Dashboard</title>

        <link rel="stylesheet" href="table.css">
        <link rel="stylesheet" href="clock.css">
        <link rel="stylesheet" href="FFC_Admin.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <!-- sidebar start  -->
        <div class="sidebar">
            <ul>

                <li class="logo">
                    <a href="#">
                        <div class="icon"><i class='bx bxl-windows' ></i></div>
                        <div class="text">Web logo</div>
                    </a>
                </li>

                <div class="menulist">

                    <li>
                        <a href="#Home">
                            <div class="icon"><i class='bx bx-home' ></i></div>
                            <div class="text">Home</div>
                        </a>
                    </li>

                    <li>
                        <a href="#Member_Details">
                            <div class="icon"><i class='bx bx-universal-access' ></i></div>
                            <div class="text">Member Details</div>
                        </a>
                    </li>

                    <li>
                        <a href="#Supplement_stock">
                            <div class="icon"><i class='bx bx-cylinder' ></i></div>
                            <div class="text">Supplement stock</div>
                        </a>
                    </li>

                    <li>
                        <a href="#Payments_details">
                            <div class="icon"><i class='bx bx-dollar' ></i></div>
                            <div class="text">Payments details</div>
                        </a>
                    </li>

                    <li>
                        <a href="#plans">
                            <div class="icon"><i class='bx bx-book-open' ></i></div>
                            <div class="text">plans</div>
                        </a>
                    </li>

                </div>

                <div class="bottom">

                    <li>
                        <a href="#">
                            <div class="icon">
                                <div class="propic">
                                    <img src="FFCimg/cbum.jpg" alt="profile picture">
                                </div>
                            </div>
                            <div class="text">Cris bumstud</div>
                        </a> 
                    </li>

                    <li>
                        <a href="FFC.html">
                            <div class="icon"><i class='bx bx-log-out'></i></div>
                            <div class="text">Logout</div>
                        </a>
                    </li>

                </div>

            </ul>
        </div>
        <!-- sidebar end  -->

        <!-- show panel start  -->
        <div class="show_panel">

            <!-- home panel start  -->
            <div class="home">

                <div class="nav_bar">
                    <div class="content">
                        <div class="time_date">

                            <div class="time_date_bg">

                                <div class="conteiner">
                                    <h1 class="day" id="day"></h1>
                                    
                                    <div class="box">
                            
                                       <div class="clock">
                                            <div class="front_clock">
                                                <div id="hour">00</div>
                                                <p>hour</p>
                                            </div>
                                       </div> 
                            
                                       <div class="clock">
                                            <div class="front_clock">
                                                <div id="minute">00</div>
                                                <p>minutes</p>
                                            </div>
                                        </div> 
                            
                                        <div class="clock">
                                            <div class="front_clock">
                                                <div id="second">00</div>
                                                <p>second</p>
                                            </div>
                                        </div> 

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="counts_pane">
                    <div class="member_count">
                        <div class="text">Members</div>
                        <div class="count">123</div>
                    </div>
                    <div class="income">
                        <div class="text">Total Income</div>
                        <div class="count">Rs.50000</div>
                    </div>
                </div>
                <div class="logins">
                    <div class="table" id="customers_table">
                        <section class="table__header">
                            <h1>Customer's Orders</h1>
                            <div class="input-group">
                                <input type="search" placeholder="Search Data...">
                                <img src="images/search.png" alt="">
                            </div>
                        </section>
                        <section class="table__body">
                            <table>
                                <thead>
                                    <tr>
                                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> <img src="FFCimg/shaki.jpg" alt="">Zinzu Chan Lee</td>
                                        <td> Seoul </td>
                                        <td> 17 Dec, 2022 </td>
                                        <td>
                                            <p class="status delivered">Delivered</p>
                                        </td>
                                        <td> <strong> $128.90 </strong></td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td><img src="FFCimg/shaki.jpg"> Jeet Saru </td>
                                        <td> Kathmandu </td>
                                        <td> 27 Aug, 2023 </td>
                                        <td>
                                            <p class="status cancelled">Cancelled</p>
                                        </td>
                                        <td> <strong>$5350.50</strong> </td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td><img src="FFCimg/shaki.jpg" alt=""> Sonal Gharti </td>
                                        <td> Tokyo </td>
                                        <td> 14 Mar, 2023 </td>
                                        <td>
                                            <p class="status shipped">Shipped</p>
                                        </td>
                                        <td> <strong>$210.40</strong> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div> 
            </div>
            <!-- home panel end -->

            <!-- member panel start  -->
            <div class="member" style="display:none">
                <main class="table" id="customers_table">
                    <section class="table__header">
                        <h1>Member Details</h1>
                        <div class="input-group">
                            <input type="search" placeholder="Search Data...">
                        </div>
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Customer </th>
                                    <th> Name </th>
                                    <th> Payment plan </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                                    <td> Seoul </td>
                                    <td> 17 Dec, 2022 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                <tr>
                                    <td> 2 </td>
                                    <td><img src="images/Jeet Saru.png" alt=""> Jeet Saru </td>
                                    <td> Kathmandu </td>
                                    <td> 27 Aug, 2023 </td>
                                    <td>
                                        <p class="status cancelled">Cancelled</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </main> 
            </div>
            <!-- member panel end  -->

            <!-- stock panel start  -->
            <div class="stock" style="display: none;">
                <main class="table" id="customers_table">
                    <section class="table__header">
                        <h1>Customer's Orders</h1>
                        <div class="input-group">
                            <input type="search" placeholder="Search Data...">
                            <img src="images/search.png" alt="">
                        </div>
                        <div class="export__file">
                            <label for="export-file" class="export__file-btn" title="Export File"></label>
                            <input type="checkbox" id="export-file">
                            <div class="export__file-options">
                                <label>Export As &nbsp; &#10140;</label>
                                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                                <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                                <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                            </div>
                        </div>
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                                    <td> Seoul </td>
                                    <td> 17 Dec, 2022 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong> $128.90 </strong></td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td><img src="images/Jeet Saru.png" alt=""> Jeet Saru </td>
                                    <td> Kathmandu </td>
                                    <td> 27 Aug, 2023 </td>
                                    <td>
                                        <p class="status cancelled">Cancelled</p>
                                    </td>
                                    <td> <strong>$5350.50</strong> </td>
                                </tr>
                                <tr>
                                    <td> 3</td>
                                    <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                                    <td> Tokyo </td>
                                    <td> 14 Mar, 2023 </td>
                                    <td>
                                        <p class="status shipped">Shipped</p>
                                    </td>
                                    <td> <strong>$210.40</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </main>
            </div>
            <!-- stock panel end  -->

            <!-- payment panel start  -->
            <div class="payment" style="display: none;">
                <main class="table" id="customers_table">
                    <section class="table__header">
                        <h1>Customer's Orders</h1>
                        <div class="input-group">
                            <input type="search" placeholder="Search Data...">
                            <img src="images/search.png" alt="">
                        </div>
                        <div class="export__file">
                            <label for="export-file" class="export__file-btn" title="Export File"></label>
                            <input type="checkbox" id="export-file">
                            <div class="export__file-options">
                                <label>Export As &nbsp; &#10140;</label>
                                <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                                <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                                <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                                <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                            </div>
                        </div>
                    </section>
                    <section class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                    <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                                    <td> Seoul </td>
                                    <td> 17 Dec, 2022 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong> $128.90 </strong></td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td><img src="images/Jeet Saru.png" alt=""> Jeet Saru </td>
                                    <td> Kathmandu </td>
                                    <td> 27 Aug, 2023 </td>
                                    <td>
                                        <p class="status cancelled">Cancelled</p>
                                    </td>
                                    <td> <strong>$5350.50</strong> </td>
                                </tr>
                                <tr>
                                    <td> 3</td>
                                    <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                                    <td> Tokyo </td>
                                    <td> 14 Mar, 2023 </td>
                                    <td>
                                        <p class="status shipped">Shipped</p>
                                    </td>
                                    <td> <strong>$210.40</strong> </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                    <td> New Delhi </td>
                                    <td> 25 May, 2023 </td>
                                    <td>
                                        <p class="status delivered">Delivered</p>
                                    </td>
                                    <td> <strong>$149.70</strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </main>
            </div>
            <!-- payment panel end  -->

            <div class="plans">
                
            </div>
            <div class="profile"></div>

        </div>
        <!-- show panel end  -->


        <!-- javaScript files  -->
        <script src="clock.js"></script>
        <script src="table.js"></script>

    </body>

</html>