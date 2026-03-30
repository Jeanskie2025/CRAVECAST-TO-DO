<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Dstyle.css">
    <title>CraveCast - Dashboard</title>
</head>

<body>

    <div class="sidebar">
        <a href="#" class="logo">
            <div class="logo-name"><span>Crave</span>Cast</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="#"><i class='bx bx-store-alt'></i>Sales Trends</a></li>
            <li class="active">
                <button onclick="window.location.href='forecast.php'"><a href="#" class="forecast"><a href="#"><i class='bx bx-analyse'></i>Forecast</button>
                </a>
            </li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Events</a></li>
            <li><a href="#"><i class='bx bx-group'></i>Users</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <button onclick="window.location.href='logout.php'"><a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>Logout</button>
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="images/logo.png">
            </a>
        </nav>

        <main>
            <div class="header">
            </div>

            <ul class="insights">
                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            200
                        </h3>
                        <p>Daily Product Sold</p>
                    </span>
                </li>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            150
                        </h3>
                        <p>New Customers</p>
                    </span>
                </li>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>
                            1400
                        </h3>
                        <p>Weekly Total Sales</p>
                    </span>
                </li>
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            3300
                        </h3>
                        <p>Daily Total Sales</p>
                    </span>
                </li>
            </ul>

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-analyse'></i>
                        <h3>Weather Forecast</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Condition</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Sunny</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rainy</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cloudy</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Remiders</h3>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Restock Ice</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Restock Pearl</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Restock Matcha Flavor</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>


            </div>

        </main>

    </div>

    <script src="Dindex.js"></script>
</body>

</html>