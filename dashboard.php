<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
// Ambil username dari session
$username = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Dashboard</title>
    <link rel="stylesheet" href="asset/dashboard.css">
</head>
<body>
    <header>
        <div class="logo">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="30" height="30" rx="4" fill="#2684FF"/>
                <path d="M15.0001 5.33331C13.5856 5.33331 12.4445 6.47442 12.4445 7.88887C12.4445 9.30331 13.5856 10.4444 15.0001 10.4444C16.4145 10.4444 17.5556 9.30331 17.5556 7.88887C17.5556 6.47442 16.4145 5.33331 15.0001 5.33331Z" fill="white"/>
                <path d="M15.0001 19.5556C13.5856 19.5556 12.4445 20.6967 12.4445 22.1111C12.4445 23.5256 13.5856 24.6667 15.0001 24.6667C16.4145 24.6667 17.5556 23.5256 17.5556 22.1111C17.5556 20.6967 16.4145 19.5556 15.0001 19.5556Z" fill="white"/>
                <path d="M15.0001 12.4444C13.5856 12.4444 12.4445 13.5855 12.4445 15C12.4445 16.4144 13.5856 17.5555 15.0001 17.5555C16.4145 17.5555 17.5556 16.4144 17.5556 15C17.5556 13.5855 16.4145 12.4444 15.0001 12.4444Z" fill="white"/>
            </svg>
            <span>To do list</span>
        </div>
        
        <nav class="main-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Spaces</a></li>
            </ul>
        </nav>
        
        <div class="header-actions">
            <button class="create-button">Create</button>
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Search">
                <span class="search-icon">🔍</span>
            </div>
            <div class="user-profile">
                <div class="avatar"><?php echo substr($username, 0, 2); ?></div>
            </div>
        </div>
        
        <button class="mobile-menu-toggle">☰</button>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <div class="user-info-sidebar">
                <div class="avatar"><?php echo substr($username, 0, 2); ?></div>
                <div class="user-name"><?php echo $username; ?></div>
            </div>
            
            <nav class="sidebar-nav">
                <section class="sidebar-section">
                    <div class="sidebar-item">
                        <span class="sidebar-item-icon">📄</span>
                        <a href="#">All content</a>
                    </div>
                </section>
                
                <section class="sidebar-section">
                    <h3 class="sidebar-title">Content</h3>
                    <div class="sidebar-item active">
                        <span class="sidebar-item-icon">✅</span>
                        <a href="#"><?php echo $username; ?>'s task list</a>
                    </div>
                    <div class="sidebar-item">
                        <span class="sidebar-item-icon">📝</span>
                        <a href="#">Meeting notes</a>
                    </div>
                </section>
            </nav>
            
            <!-- Tombol logout di kiri bawah sidebar -->
            <div class="sidebar-footer">
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </aside>
        
        <main class="content">
            <nav class="breadcrumb">
                <a href="#">Home</a>
                <span>/</span>
                <span><?php echo $username; ?>'s task list</span>
            </nav>
            
            <section class="page-header">
                <div class="page-title">
                    <span class="icon">📋</span>
                    <h1>Today's Tasks</h1>
                </div>
                
                <div class="page-actions">
                    <button class="share-button">Share</button>
                </div>
            </section>
            
            <section class="task-list-container">
                <div class="table-responsive">
                    <table class="todo-table">
                        <thead>
                            <tr>
                                <th>To-dos</th>
                                <th>Due date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="task-item">
                                        <span class="checkbox"></span>
                                        <div class="task-content">Take meeting notes</div>
                                    </div>
                                </td>
                                <td class="date">Mar 20, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-item">
                                        <span class="checkbox"></span>
                                        <div class="task-content">Start a brainstorming session</div>
                                    </div>
                                </td>
                                <td class="date">Mar 20, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-item">
                                        <span class="checkbox"></span>
                                        <div class="task-content">Share with your team</div>
                                    </div>
                                </td>
                                <td class="date">Mar 20, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="task-item">
                                        <span class="checkbox"></span>
                                        <div class="task-content"></div>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    
    <footer class="main-footer">
        <p>Kelompok 1. All rights reserved.</p>
    </footer>
</body>
</html>