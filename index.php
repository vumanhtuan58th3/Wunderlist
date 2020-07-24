<?php
    require('connectMySQL.php');
    session_start();
    error_reporting(0);
     // $data=$_SESSION['searchTask1'];
    // unset($data);
?>
<!DOCTYPE html>
<html lang="vi"> 
    <head> 
        <title>Document</title> 
        <meta charset="UTF-8" > <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href=".css" type="text/css"> 
        <script src="jquery-3.4.1.min.js"></script>
        <script src="wunderlist-1.js"></script>
        <script src="ajax.js"></script>
    </head> 
    <body>
        <div class="body-one">
            <ul class="context-menu isLeft hidden">
                <li class="context-menu-item" title="email-list">
                    <span class="context-menu-icon">
                        <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Email List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Print List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
            </ul>
            <ul class="context-menu createList">
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="folders rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folders"> <g id="Path-2-+-c-2" transform="translate(2.000000, 2.000000)"> <path d="M0.5,12 C0.22,12 -1.34760666e-14,11.78 -1.34760666e-14,11.5 L-1.42108547e-14,2.5 C-1.42108547e-14,1.68 0.68,1 1.5,1 L14.5,1 C15.32,1 16,1.68 16,2.5 L16,11.5 C16,11.78 15.78,12 15.5,12 L0.5,12 Z M1,11 L15,11 L15,2.5 C15,2.22 14.78,2 14.5,2 L1.5,2 C1.22,2 1,2.22 1,2.5 L1,11 Z M9.5,16 C8.68,16 8,15.32 8,14.5 L8,13.5 C8,13.22 8.22,13 8.5,13 C8.78,13 9,13.22 9,13.5 L9,14.5 C9,14.78 9.22,15 9.5,15 L14.5,15 C14.78,15 15,14.78 15,14.5 L15,13.5 C15,13.22 15.22,13 15.5,13 C15.78,13 16,13.22 16,13.5 L16,14.5 C16,15.32 15.32,16 14.5,16 L9.5,16 Z" id="c-2" transform="translate(8.000000, 8.500000) rotate(-180.000000) translate(-8.000000, -8.500000) "></path> </g> </g> </g> </svg>
                    </span>
                    <span class="label">Create a Folder</span>
                    <span class="chevron"><svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg></span>
                </li>
                <li class="context-menu-item separator"> 
                    <span class="context-menu-icon">
                        
                    </span>
                    <span class="label"></span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="options rtl-flip" style= "visibility: visible";  width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Rename List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="share rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="share"> <path d="M11.5025,12 C13.7825,12 15.5025,8.84 15.5025,6 C15.5025,3.8 13.7025,2 11.5025,2 C9.3025,2 7.5025,3.8 7.5025,6 C7.5025,8.5 9.0225,12 11.5025,12 L11.5025,12 Z M11.5025,3 C13.1625,3 14.5025,4.34 14.5025,6 C14.5025,8.26 13.1225,11 11.5025,11 C9.8425,11 8.5025,8.26 8.5025,6 C8.5025,4.34 9.8425,3 11.5025,3 L11.5025,3 Z M4.5025,10 L6.0025,10 C6.2825,10 6.5025,9.78 6.5025,9.5 C6.5025,9.22 6.2825,9 6.0025,9 L4.5025,9 L4.5025,7.5 C4.5025,7.22 4.2825,7 4.0025,7 C3.7225,7 3.5025,7.22 3.5025,7.5 L3.5025,9 L2.0025,9 C1.7225,9 1.5025,9.22 1.5025,9.5 C1.5025,9.78 1.7225,10 2.0025,10 L3.5025,10 L3.5025,11.5 C3.5025,11.78 3.7225,12 4.0025,12 C4.2825,12 4.5025,11.78 4.5025,11.5 L4.5025,10 Z M18.2625,14.88 C18.0625,14 17.4025,13.28 16.5225,13.04 L14.2225,12.36 C14.0825,12.32 13.9625,12.26 13.8625,12.14 C13.6625,11.96 13.3425,11.96 13.1625,12.16 C12.9625,12.34 12.9625,12.66 13.1625,12.86 C13.3825,13.08 13.6425,13.24 13.9425,13.32 L16.2425,14 C16.7625,14.14 17.1625,14.58 17.2825,15.1 L17.4425,15.8 C16.9025,16.16 15.2025,17 11.5025,17 C7.7825,17 6.1025,16.14 5.5625,15.8 L5.7225,15.04 C5.8425,14.5 6.2625,14.06 6.8025,13.92 L9.0425,13.32 C9.3425,13.24 9.6225,13.08 9.8625,12.86 C10.0425,12.66 10.0425,12.34 9.8625,12.14 C9.6625,11.96 9.3425,11.96 9.1425,12.14 C9.0425,12.24 8.9225,12.32 8.7825,12.36 L6.5425,12.96 C5.6425,13.2 4.9625,13.92 4.7425,14.82 L4.5225,15.9 C4.4825,16.06 4.5225,16.24 4.6425,16.36 C4.7225,16.42 6.3625,18 11.5025,18 C16.6425,18 18.2825,16.42 18.3625,16.36 C18.4825,16.24 18.5225,16.06 18.4825,15.9 L18.2625,14.88 Z" id="W"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Add People</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon"> </span>
                    <span class="label"></span>
                    <span class="chevron"></span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Email List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Print List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon"> </span>
                    <span class="label"></span>
                    <span class="chevron"></span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="copy" sketch:type="MSArtboardGroup"> <path d="M12.7921708,6.5 L8.647,10.646 C8.451,10.842 8.451,11.158 8.647,11.353 C8.744,11.451 8.872,11.5 9,11.5 C9.128,11.5 9.256,11.451 9.354,11.353 L13.5,7.207 L13.5,10 C13.5,10.276 13.724,10.5 14,10.5 C14.276,10.5 14.5,10.276 14.5,10 L14.5,6.01573317 C14.5041978,5.88263558 14.4555311,5.7480518 14.354,5.646 C14.2519482,5.54446887 14.1173644,5.4958022 13.9841257,5.5 L10,5.5 C9.724,5.5 9.5,5.724 9.5,6 C9.5,6.276 9.724,6.5 10,6.5 L12.7921708,6.5 L12.7921708,6.5 Z M2.5,5.5 C2.224,5.5 2,5.276 2,5 L2,4.5 C2,3.121 3.121,2 4.5,2 L5,2 C5.276,2 5.5,2.224 5.5,2.5 C5.5,2.776 5.276,3 5,3 L4.5,3 C3.673,3 3,3.673 3,4.5 L3,5 C3,5.276 2.776,5.5 2.5,5.5 Z M5,18 L4.5,18 C3.121,18 2,16.879 2,15.5 L2,15 C2,14.724 2.224,14.5 2.5,14.5 C2.776,14.5 3,14.724 3,15 L3,15.5 C3,16.327 3.673,17 4.5,17 L5,17 C5.276,17 5.5,17.224 5.5,17.5 C5.5,17.776 5.276,18 5,18 Z M15.5,18 L15,18 C14.724,18 14.5,17.776 14.5,17.5 C14.5,17.224 14.724,17 15,17 L15.5,17 C16.327,17 17,16.327 17,15.5 L17,15 C17,14.724 17.224,14.5 17.5,14.5 C17.776,14.5 18,14.724 18,15 L18,15.5 C18,16.879 16.879,18 15.5,18 Z M17.5,5.5 C17.224,5.5 17,5.276 17,5 L17,4.5 C17,3.673 16.327,3 15.5,3 L15,3 C14.724,3 14.5,2.776 14.5,2.5 C14.5,2.224 14.724,2 15,2 L15.5,2 C16.879,2 18,3.121 18,4.5 L18,5 C18,5.276 17.776,5.5 17.5,5.5 Z M2.5,12.5 C2.224,12.5 2,12.276 2,12 L2,8 C2,7.724 2.224,7.5 2.5,7.5 C2.776,7.5 3,7.724 3,8 L3,12 C3,12.276 2.776,12.5 2.5,12.5 Z M17.5,12.5 C17.224,12.5 17,12.276 17,12 L17,8 C17,7.724 17.224,7.5 17.5,7.5 C17.776,7.5 18,7.724 18,8 L18,12 C18,12.276 17.776,12.5 17.5,12.5 Z M12,3 L8,3 C7.724,3 7.5,2.776 7.5,2.5 C7.5,2.224 7.724,2 8,2 L12,2 C12.276,2 12.5,2.224 12.5,2.5 C12.5,2.776 12.276,3 12,3 Z M12,18 L8,18 C7.724,18 7.5,17.776 7.5,17.5 C7.5,17.224 7.724,17 8,17 L12,17 C12.276,17 12.5,17.224 12.5,17.5 C12.5,17.776 12.276,18 12,18 Z" id="Copy" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Copy List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="duplicate" sketch:type="MSArtboardGroup"> <path d="M15.5,2 L7.5,2 C6.121,2 5,3.121 5,4.5 L5,6 L4.5,6 C3.121,6 2,7.121 2,8.5 C2,8.776 2.224,9 2.5,9 C2.776,9 3,8.776 3,8.5 C3,7.673 3.673,7 4.5,7 L5,7 L5,12.5 C5,13.879 6.121,15 7.5,15 L13,15 L13,15.5 C13,16.327 12.327,17 11.5,17 C11.224,17 11,17.224 11,17.5 C11,17.776 11.224,18 11.5,18 C12.879,18 14,16.879 14,15.5 L14,15 L15.5,15 C16.879,15 18,13.879 18,12.5 L18,4.5 C18,3.121 16.879,2 15.5,2 L15.5,2 Z M17,12.5 C17,13.327 16.327,14 15.5,14 L7.5,14 C6.673,14 6,13.327 6,12.5 L6,4.5 C6,3.673 6.673,3 7.5,3 L15.5,3 C16.327,3 17,3.673 17,4.5 L17,12.5 Z M2.5,14 C2.776,14 3,13.776 3,13.5 L3,11.5 C3,11.224 2.776,11 2.5,11 C2.224,11 2,11.224 2,11.5 L2,13.5 C2,13.776 2.224,14 2.5,14 Z M8.5,17 L6.5,17 C6.224,17 6,17.224 6,17.5 C6,17.776 6.224,18 6.5,18 L8.5,18 C8.776,18 9,17.776 9,17.5 C9,17.224 8.776,17 8.5,17 Z M4.5,17 C3.673,17 3,16.327 3,15.5 C3,15.224 2.776,15 2.5,15 C2.224,15 2,15.224 2,15.5 C2,16.879 3.121,18 4.5,18 C4.776,18 5,17.776 5,17.5 C5,17.224 4.776,17 4.5,17 Z M14.691,5.038 C14.63,5.013 14.565,5 14.5,5 L10.5,5 C10.224,5 10,5.224 10,5.5 C10,5.776 10.224,6 10.5,6 L13.293,6 L10.146,9.146 C9.951,9.342 9.951,9.658 10.146,9.853 C10.244,9.951 10.372,10 10.5,10 C10.628,10 10.756,9.951 10.853,9.853 L14,6.707 L14,9.5 C14,9.776 14.224,10 14.5,10 C14.776,10 15,9.776 15,9.5 L15,5.5 C15,5.435 14.987,5.37 14.962,5.309 C14.911,5.187 14.813,5.089 14.691,5.038" id="Fill-1" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Duplicate List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Delete List</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
            
            </ul>
            <ul class="context-menu isBottom">
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="completed" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="completed"> <path d="M7.48412073,16.9975 C7.36412073,16.9975 7.24412073,16.9375 7.14412073,16.8575 C5.66412073,15.3575 4.00412073,14.0375 2.24412073,12.9175 C2.00412073,12.7775 1.92412073,12.4575 2.08412073,12.2375 C2.22412073,11.9975 2.54412073,11.9375 2.76412073,12.0775 C4.42412073,13.1175 5.98412073,14.3375 7.38412073,15.6975 C10.3441207,10.8175 13.3841207,6.9175 17.1441207,3.1375 C17.3441207,2.9575 17.6641207,2.9575 17.8641207,3.1375 C18.0441207,3.3375 18.0441207,3.6575 17.8641207,3.8575 C14.0041207,7.6975 10.9441207,11.6775 7.92412073,16.7575 C7.84412073,16.8775 7.70412073,16.9775 7.56412073,16.9975 L7.48412073,16.9975 Z" id="H"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Mark as Completed</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="star" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="star"> <path d="M4.74,18 C4.64,18 4.54,17.96 4.46,17.9 C4.28,17.76 4.2,17.54 4.28,17.34 L6.16,11.5 L1.2,7.9 C1.04,7.78 0.96,7.56 1.02,7.34 C1.1,7.14 1.28,7 1.5,7 L7.64,7 L9.52,1.16 C9.66,0.76 10.34,0.76 10.48,1.16 L12.38,7 L18.5,7 C18.72,7 18.9,7.14 18.98,7.34 C19.04,7.56 18.96,7.78 18.8,7.9 L13.84,11.5 L15.72,17.34 C15.8,17.54 15.72,17.76 15.54,17.9 C15.38,18.02 15.14,18.02 14.96,17.9 L10,14.3 L5.04,17.9 C4.96,17.96 4.84,18 4.74,18 L4.74,18 Z M10,13.18 C10.1,13.18 10.2,13.2 10.3,13.28 L14.3,16.18 L12.78,11.46 C12.7,11.26 12.78,11.04 12.96,10.92 L16.96,8 L12,8 C11.8,8 11.6,7.86 11.54,7.66 L10,2.94 L8.46,7.66 C8.4,7.86 8.22,8 8,8 L3.04,8 L7.04,10.92 C7.22,11.04 7.3,11.26 7.22,11.46 L5.7,16.18 L9.7,13.28 C9.8,13.2 9.9,13.18 10,13.18 L10,13.18 Z"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Mark as Starred</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon"> </span>
                    <span class="label"></span>
                    <span class="chevron"></span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="today" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="today"> <path d="M2.5,7 C2.22,7 2,6.78 2,6.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,6.5 C18,6.78 17.78,7 17.5,7 L2.5,7 Z M3,6 L17,6 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,6 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,8.5 C2,8.22 2.22,8 2.5,8 C2.78,8 3,8.22 3,8.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,8.5 C17,8.22 17.22,8 17.5,8 C17.78,8 18,8.22 18,8.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z" id="E"></path> </g> </g> </svg>
                        <span class="date">3</span>
                    </span>
                    <span class="label">Due Today</span>
                    <span class="chevron"><svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg></span>
                </li>
                <li class="context-menu-item"title="Due Tomorrow">
                    <span class="context-menu-icon">
                        <svg class="today" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="today"> <path d="M2.5,7 C2.22,7 2,6.78 2,6.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,6.5 C18,6.78 17.78,7 17.5,7 L2.5,7 Z M3,6 L17,6 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,6 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,8.5 C2,8.22 2.22,8 2.5,8 C2.78,8 3,8.22 3,8.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,8.5 C17,8.22 17.22,8 17.5,8 C17.78,8 18,8.22 18,8.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z" id="E"></path> </g> </g> </svg>
                        <span class="date">4</span>
                    </span>
                    <span class="label">Due Tomorrow</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="today" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="today"> <path d="M2.5,7 C2.22,7 2,6.78 2,6.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,6.5 C18,6.78 17.78,7 17.5,7 L2.5,7 Z M3,6 L17,6 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,6 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,8.5 C2,8.22 2.22,8 2.5,8 C2.78,8 3,8.22 3,8.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,8.5 C17,8.22 17.22,8 17.5,8 C17.78,8 18,8.22 18,8.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z" id="E"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Remove Due Date</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon">

                    </span>
                    <span class="label"></span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="plus-small" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M10,10l0,6.5c-0.003,0.053 -0.008,0.103 -0.024,0.155c-0.038,0.116 -0.12,0.217 -0.226,0.278c-0.047,0.027 -0.094,0.042 -0.146,0.056c-0.052,0.008 -0.051,0.008 -0.104,0.011c-0.053,-0.003 -0.103,-0.008 -0.155,-0.024c-0.15,-0.05 -0.271,-0.171 -0.321,-0.321c-0.016,-0.052 -0.021,-0.102 -0.024,-0.155l0,-6.5l-6.5,0c-0.046,-0.002 -0.058,-0.001 -0.104,-0.011c-0.103,-0.022 -0.197,-0.076 -0.268,-0.154c-0.169,-0.188 -0.169,-0.482 0,-0.67c0.035,-0.038 0.077,-0.072 0.122,-0.098c0.078,-0.045 0.161,-0.062 0.25,-0.067l6.5,0l0,-6.5c0.005,-0.089 0.022,-0.172 0.067,-0.25c0.126,-0.219 0.406,-0.31 0.636,-0.207c0.048,0.022 0.093,0.05 0.132,0.085c0.078,0.071 0.132,0.165 0.154,0.268c0.01,0.046 0.009,0.058 0.011,0.104l0,6.5l6.5,0c0.046,0.002 0.058,0.001 0.104,0.011c0.103,0.022 0.197,0.076 0.268,0.154c0.169,0.188 0.169,0.482 0,0.67c-0.035,0.038 -0.077,0.072 -0.122,0.098c-0.078,0.045 -0.161,0.062 -0.25,0.067l-6.5,0Z"></path> </g> </svg>
                    </span>
                    <span class="label">Create a new list from To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="move" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Move" sketch:type="MSArtboardGroup" stroke-linecap="round"> <path d="M3,14.5 L16,14.5" id="Line" sketch:type="MSShapeGroup"></path> <path d="M3,17.5 L16,17.5" id="Line" sketch:type="MSShapeGroup"></path> <path d="M9.5,2.5 L9.5,11.5" id="Line" sketch:type="MSShapeGroup"></path> <path d="M4.5,6.5 L9.5,11.5" id="Line" sketch:type="MSShapeGroup"></path> <path d="M14.5,6.5 L9.5,11.5" id="Line" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Move to-do to...</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Email Selected To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Print Selected To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon">

                    </span>
                    <span class="label"></span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="copy" sketch:type="MSArtboardGroup"> <path d="M12.7921708,6.5 L8.647,10.646 C8.451,10.842 8.451,11.158 8.647,11.353 C8.744,11.451 8.872,11.5 9,11.5 C9.128,11.5 9.256,11.451 9.354,11.353 L13.5,7.207 L13.5,10 C13.5,10.276 13.724,10.5 14,10.5 C14.276,10.5 14.5,10.276 14.5,10 L14.5,6.01573317 C14.5041978,5.88263558 14.4555311,5.7480518 14.354,5.646 C14.2519482,5.54446887 14.1173644,5.4958022 13.9841257,5.5 L10,5.5 C9.724,5.5 9.5,5.724 9.5,6 C9.5,6.276 9.724,6.5 10,6.5 L12.7921708,6.5 L12.7921708,6.5 Z M2.5,5.5 C2.224,5.5 2,5.276 2,5 L2,4.5 C2,3.121 3.121,2 4.5,2 L5,2 C5.276,2 5.5,2.224 5.5,2.5 C5.5,2.776 5.276,3 5,3 L4.5,3 C3.673,3 3,3.673 3,4.5 L3,5 C3,5.276 2.776,5.5 2.5,5.5 Z M5,18 L4.5,18 C3.121,18 2,16.879 2,15.5 L2,15 C2,14.724 2.224,14.5 2.5,14.5 C2.776,14.5 3,14.724 3,15 L3,15.5 C3,16.327 3.673,17 4.5,17 L5,17 C5.276,17 5.5,17.224 5.5,17.5 C5.5,17.776 5.276,18 5,18 Z M15.5,18 L15,18 C14.724,18 14.5,17.776 14.5,17.5 C14.5,17.224 14.724,17 15,17 L15.5,17 C16.327,17 17,16.327 17,15.5 L17,15 C17,14.724 17.224,14.5 17.5,14.5 C17.776,14.5 18,14.724 18,15 L18,15.5 C18,16.879 16.879,18 15.5,18 Z M17.5,5.5 C17.224,5.5 17,5.276 17,5 L17,4.5 C17,3.673 16.327,3 15.5,3 L15,3 C14.724,3 14.5,2.776 14.5,2.5 C14.5,2.224 14.724,2 15,2 L15.5,2 C16.879,2 18,3.121 18,4.5 L18,5 C18,5.276 17.776,5.5 17.5,5.5 Z M2.5,12.5 C2.224,12.5 2,12.276 2,12 L2,8 C2,7.724 2.224,7.5 2.5,7.5 C2.776,7.5 3,7.724 3,8 L3,12 C3,12.276 2.776,12.5 2.5,12.5 Z M17.5,12.5 C17.224,12.5 17,12.276 17,12 L17,8 C17,7.724 17.224,7.5 17.5,7.5 C17.776,7.5 18,7.724 18,8 L18,12 C18,12.276 17.776,12.5 17.5,12.5 Z M12,3 L8,3 C7.724,3 7.5,2.776 7.5,2.5 C7.5,2.224 7.724,2 8,2 L12,2 C12.276,2 12.5,2.224 12.5,2.5 C12.5,2.776 12.276,3 12,3 Z M12,18 L8,18 C7.724,18 7.5,17.776 7.5,17.5 C7.5,17.224 7.724,17 8,17 L12,17 C12.276,17 12.5,17.224 12.5,17.5 C12.5,17.776 12.276,18 12,18 Z" id="Copy" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Copy To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>
                    </span>
                        <input type="submit" class="label" value="Delete To-do">
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                   
                </li>
            </ul>
            <ul class="context-menu isBottomSubmenu">
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="completed" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="completed"> <path d="M7.48412073,16.9975 C7.36412073,16.9975 7.24412073,16.9375 7.14412073,16.8575 C5.66412073,15.3575 4.00412073,14.0375 2.24412073,12.9175 C2.00412073,12.7775 1.92412073,12.4575 2.08412073,12.2375 C2.22412073,11.9975 2.54412073,11.9375 2.76412073,12.0775 C4.42412073,13.1175 5.98412073,14.3375 7.38412073,15.6975 C10.3441207,10.8175 13.3841207,6.9175 17.1441207,3.1375 C17.3441207,2.9575 17.6641207,2.9575 17.8641207,3.1375 C18.0441207,3.3375 18.0441207,3.6575 17.8641207,3.8575 C14.0041207,7.6975 10.9441207,11.6775 7.92412073,16.7575 C7.84412073,16.8775 7.70412073,16.9775 7.56412073,16.9975 L7.48412073,16.9975 Z" id="H"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Mark as Not Completed</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon"> </span>
                    <span class="label"></span>
                    <span class="chevron"></span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon"> 
                        <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Email Selected To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                            <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Print Selected To-do</span>
                    <span class="chevron"><svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg></span>
                </li>
                <li class="context-menu-item separator">
                    <span class="context-menu-icon"> </span>
                    <span class="label"></span>
                    <span class="chevron"></span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="copy" sketch:type="MSArtboardGroup"> <path d="M12.7921708,6.5 L8.647,10.646 C8.451,10.842 8.451,11.158 8.647,11.353 C8.744,11.451 8.872,11.5 9,11.5 C9.128,11.5 9.256,11.451 9.354,11.353 L13.5,7.207 L13.5,10 C13.5,10.276 13.724,10.5 14,10.5 C14.276,10.5 14.5,10.276 14.5,10 L14.5,6.01573317 C14.5041978,5.88263558 14.4555311,5.7480518 14.354,5.646 C14.2519482,5.54446887 14.1173644,5.4958022 13.9841257,5.5 L10,5.5 C9.724,5.5 9.5,5.724 9.5,6 C9.5,6.276 9.724,6.5 10,6.5 L12.7921708,6.5 L12.7921708,6.5 Z M2.5,5.5 C2.224,5.5 2,5.276 2,5 L2,4.5 C2,3.121 3.121,2 4.5,2 L5,2 C5.276,2 5.5,2.224 5.5,2.5 C5.5,2.776 5.276,3 5,3 L4.5,3 C3.673,3 3,3.673 3,4.5 L3,5 C3,5.276 2.776,5.5 2.5,5.5 Z M5,18 L4.5,18 C3.121,18 2,16.879 2,15.5 L2,15 C2,14.724 2.224,14.5 2.5,14.5 C2.776,14.5 3,14.724 3,15 L3,15.5 C3,16.327 3.673,17 4.5,17 L5,17 C5.276,17 5.5,17.224 5.5,17.5 C5.5,17.776 5.276,18 5,18 Z M15.5,18 L15,18 C14.724,18 14.5,17.776 14.5,17.5 C14.5,17.224 14.724,17 15,17 L15.5,17 C16.327,17 17,16.327 17,15.5 L17,15 C17,14.724 17.224,14.5 17.5,14.5 C17.776,14.5 18,14.724 18,15 L18,15.5 C18,16.879 16.879,18 15.5,18 Z M17.5,5.5 C17.224,5.5 17,5.276 17,5 L17,4.5 C17,3.673 16.327,3 15.5,3 L15,3 C14.724,3 14.5,2.776 14.5,2.5 C14.5,2.224 14.724,2 15,2 L15.5,2 C16.879,2 18,3.121 18,4.5 L18,5 C18,5.276 17.776,5.5 17.5,5.5 Z M2.5,12.5 C2.224,12.5 2,12.276 2,12 L2,8 C2,7.724 2.224,7.5 2.5,7.5 C2.776,7.5 3,7.724 3,8 L3,12 C3,12.276 2.776,12.5 2.5,12.5 Z M17.5,12.5 C17.224,12.5 17,12.276 17,12 L17,8 C17,7.724 17.224,7.5 17.5,7.5 C17.776,7.5 18,7.724 18,8 L18,12 C18,12.276 17.776,12.5 17.5,12.5 Z M12,3 L8,3 C7.724,3 7.5,2.776 7.5,2.5 C7.5,2.224 7.724,2 8,2 L12,2 C12.276,2 12.5,2.224 12.5,2.5 C12.5,2.776 12.276,3 12,3 Z M12,18 L8,18 C7.724,18 7.5,17.776 7.5,17.5 C7.5,17.224 7.724,17 8,17 L12,17 C12.276,17 12.5,17.224 12.5,17.5 C12.5,17.776 12.276,18 12,18 Z" id="Copy" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                    </span>
                    <span class="label">Copy To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
                <li class="context-menu-item">
                    <span class="context-menu-icon">
                        <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>    
                    </span>
                    <span class="label">Delete To-do</span>
                    <span class="chevron">
                        <svg class="folder-arrow" width="15px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="folder-arrow"> <path d="M13.61,16.8575 C13.79,16.6575 13.79,16.3375 13.61,16.1375 L7.45,9.9975 L13.61,3.8575 C13.79,3.6575 13.79,3.3375 13.61,3.1375 C13.41,2.9575 13.09,2.9575 12.89,3.1375 L6.39,9.6375 C6.21,9.8375 6.21,10.1575 6.39,10.3575 L12.89,16.8575 C12.99,16.9575 13.13,16.9975 13.25,16.9975 C13.37,16.9975 13.51,16.9575 13.61,16.8575 Z" id="w"></path> </g> </g> </svg>
                    </span>
                </li>
            </ul>
            <div class="media">
                <div class="search-toolbar">
                    <a href="#">
                        <svg class="list-toggle" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M0.5,3.5l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> <path d="M0.5,9.53l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> <path d="M0.5,15.5l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> </g> </svg>
                    </a>
                </div>
                <div class="user-toolbar-1">
                    <a href="#">
                        <span class="user-avatar">
                            <img src="image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="ádgs">
                        </span>
                    </a>
                </div>
                <div class="list-scroll">
                    <div class="list-one">
                        <span class="span-list-one">
                            <svg class="inbox" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M10,15 C8.8,15 7.78,14.14 7.56,13 L2.5,13 C2.22,13 2,12.78 2,12.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,12.5 C18,12.78 17.78,13 17.5,13 L12.44,13 C12.22,14.14 11.2,15 10,15 L10,15 Z M3,12 L8,12 C8.28,12 8.5,12.22 8.5,12.5 C8.5,13.32 9.18,14 10,14 C10.82,14 11.5,13.32 11.5,12.5 C11.5,12.22 11.72,12 12,12 L17,12 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,12 Z M5.5,6 C5.22,6 5,5.78 5,5.5 C5,5.22 5.22,5 5.5,5 L14.5,5 C14.78,5 15,5.22 15,5.5 C15,5.78 14.78,6 14.5,6 L5.5,6 Z M5.5,8 C5.22,8 5,7.78 5,7.5 C5,7.22 5.22,7 5.5,7 L14.5,7 C14.78,7 15,7.22 15,7.5 C15,7.78 14.78,8 14.5,8 L5.5,8 Z M5.5,10 C5.22,10 5,9.78 5,9.5 C5,9.22 5.22,9 5.5,9 L14.5,9 C14.78,9 15,9.22 15,9.5 C15,9.78 14.78,10 14.5,10 L5.5,10 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,14.5 C2,14.22 2.22,14 2.5,14 C2.78,14 3,14.22 3,14.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,14.5 C17,14.22 17.22,14 17.5,14 C17.78,14 18,14.22 18,14.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z" id="A"></path> </g> </g> </svg>
                        </span>
                    </div>
                    <div class="list-two">
                        <span class="span-list-two">
                            <svg class="more-vertical" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M8,15.5c0,-0.828 0.672,-1.5 1.5,-1.5c0.828,0 1.5,0.672 1.5,1.5c0,0.828 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.672 -1.5,-1.5Z"></path> <path d="M8,9.5c0,-0.828 0.672,-1.5 1.5,-1.5c0.828,0 1.5,0.672 1.5,1.5c0,0.828 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.672 -1.5,-1.5Z"></path> <path d="M8,3.5c0,-0.828 0.672,-1.5 1.5,-1.5c0.828,0 1.5,0.672 1.5,1.5c0,0.828 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.672 -1.5,-1.5Z"></path> </g> </svg>
                        </span>
                    </div>
                </div>
                <div class="left-foot">
                    <a href="#">
                        <svg class="plus-small" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M10,10l0,6.5c-0.003,0.053 -0.008,0.103 -0.024,0.155c-0.038,0.116 -0.12,0.217 -0.226,0.278c-0.047,0.027 -0.094,0.042 -0.146,0.056c-0.052,0.008 -0.051,0.008 -0.104,0.011c-0.053,-0.003 -0.103,-0.008 -0.155,-0.024c-0.15,-0.05 -0.271,-0.171 -0.321,-0.321c-0.016,-0.052 -0.021,-0.102 -0.024,-0.155l0,-6.5l-6.5,0c-0.046,-0.002 -0.058,-0.001 -0.104,-0.011c-0.103,-0.022 -0.197,-0.076 -0.268,-0.154c-0.169,-0.188 -0.169,-0.482 0,-0.67c0.035,-0.038 0.077,-0.072 0.122,-0.098c0.078,-0.045 0.161,-0.062 0.25,-0.067l6.5,0l0,-6.5c0.005,-0.089 0.022,-0.172 0.067,-0.25c0.126,-0.219 0.406,-0.31 0.636,-0.207c0.048,0.022 0.093,0.05 0.132,0.085c0.078,0.071 0.132,0.165 0.154,0.268c0.01,0.046 0.009,0.058 0.011,0.104l0,6.5l6.5,0c0.046,0.002 0.058,0.001 0.104,0.011c0.103,0.022 0.197,0.076 0.268,0.154c0.169,0.188 0.169,0.482 0,0.67c-0.035,0.038 -0.077,0.072 -0.122,0.098c-0.078,0.045 -0.161,0.062 -0.25,0.067l-6.5,0Z"></path> </g> </svg>
                    </a>
                </div>
            </div>
            <div id="main-left">
                <div id="left-header">
                    <div id="left-l"> 
                        <svg class="list-toggle" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M0.5,3.5l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> <path d="M0.5,9.53l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> <path d="M0.5,15.5l19,0" style="fill:none;stroke-width:1px;stroke:white;"></path> </g> </svg>
                    </div>
                    <div id="mid-l">
                        <!-- <form action="searchTask.php" method="GET"> -->
                            <input type="text" name="search" value="">
                        <!-- </form> -->
                    </div>
                    <div id="right-l">
                        <svg class="search rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M8.5025,15 C4.9225,15 2.0025,12.08 2.0025,8.5 C2.0025,4.92 4.9225,2 8.5025,2 C12.0825,2 15.0025,4.92 15.0025,8.5 C15.0025,12.08 12.0825,15 8.5025,15 L8.5025,15 Z M8.5025,3 C5.4625,3 3.0025,5.46 3.0025,8.5 C3.0025,11.54 5.4625,14 8.5025,14 C11.5425,14 14.0025,11.54 14.0025,8.5 C14.0025,5.46 11.5425,3 8.5025,3 L8.5025,3 Z M17.5025,18 C17.3825,18 17.2425,17.96 17.1425,17.86 L13.6425,14.36 C13.4625,14.16 13.4625,13.84 13.6425,13.64 C13.8425,13.46 14.1625,13.46 14.3625,13.64 L17.8625,17.14 C18.0425,17.34 18.0425,17.66 17.8625,17.86 C17.7625,17.96 17.6225,18 17.5025,18 L17.5025,18 Z" id="z"></path> </g> </g> </svg>
                    </div>
                </div>
                <div id="left-mid"> 
                    <div id="chap1">
                        <div id="user-toolbar">
                            <span class="user-avatar">
                                <img src="image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="ádgs">
                            </span>
                            <span class="user-name" id="none"><?php echo $_SESSION['email'] ?></span>
                            <span class="user-arrow" id="none">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M10.502,13c-0.132,0 -0.26,-0.053 -0.354,-0.146l-4.002,-4c-0.195,-0.195 -0.195,-0.512 0,-0.708c0.195,-0.195 0.512,-0.195 0.707,0l3.649,3.647l3.644,-3.647c0.195,-0.195 0.512,-0.195 0.707,0c0.195,0.195 0.195,0.512 0,0.708l-3.997,4c-0.094,0.093 -0.221,0.146 -0.354,0.146"></path> </g> </svg>
                            </span>
                            <div class="hover-avatar" style="top:90px; left:8px; ">
                                <div class="menu">
                                    <div class="content">
                                        <ul class="list-menu">
                                            <li class="list-menu1">
                                                <text rel="userbar_last_synced_$" data="8 minutes ago">Last synced <token class="token_0" title="8 minutes ago">8 minutes ago</token></text>
                                            </li>
                                            <li class="list-menu2">
                                                <a href="#"><text>Sync Now</text></a>
                                            </li>
                                            <li class="list-menu3">
                                                <a href="#"><text>Account Settings</text></a>
                                            </li>
                                            <li class="list-menu3">
                                                <a href="#"><text>Change Background</text></a>
                                            </li>
                                            <li class="list-menu2">
                                                <a href="#"><text>Restore deleted lists</text></a>
                                            </li>
                                            <li class="list-menu3">
                                                <a href="#"><text>Install the Browser Extension</text></a>
                                            </li>
                                            <li class="list-menu3">
                                                <a href="#"><text>Love Wunderlist?</text></a>
                                            </li>
                                            <li class="list-menu3">
                                                <a href="#"><text>Tell Your Friends...</text></a>
                                            </li>
                                            <li class="list-menu2">
                                                <a href="#"><text>Wunderlist Website</text></a>
                                            </li>
                                            <li class="list-menu1">vumanhtuan12a3@gmail.com</li>
                                            <li class="list-menu3">
                                                <a href="logOut.php"><text>Sign Out</text></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="near-toolbar">
                            <div class="near1">
                                <svg class="bell" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="bell"> <path d="M15.2,10.14 C14.74,9.6 14.46,8.92 14.4,8.2 L14.28,6.94 C14.14,5.08 12.76,3.54 11,3.12 L11,3 C11,2.44 10.56,2 10,2 C9.44,2 9,2.44 9,3 L9,3.12 C7.24,3.54 5.86,5.08 5.72,6.94 L5.6,8.2 C5.54,8.92 5.28,9.6 4.8,10.16 L4.04,11.06 C3.38,11.88 3,12.9 3,13.94 L3,14.5 C3,14.78 3.22,15 3.5,15 L16.5,15 C16.78,15 17,14.78 17,14.5 L17,13.94 C17,12.9 16.62,11.88 15.96,11.06 L15.2,10.14 Z M16,14 L4,14 L4,13.94 C4,13.14 4.28,12.34 4.82,11.7 L5.58,10.8 C6.18,10.08 6.52,9.2 6.6,8.28 L6.7,7.02 C6.84,5.34 8.3,4 10,4 C11.7,4 13.16,5.34 13.3,7.02 L13.4,8.28 C13.48,9.2 13.84,10.08 14.42,10.8 L15.18,11.7 C15.72,12.34 16,13.14 16,13.94 L16,14 Z M12.3,16.1 C12.08,15.94 11.76,15.98 11.58,16.2 C10.82,17.22 9.18,17.22 8.4,16.2 C8.24,15.98 7.92,15.94 7.7,16.1 C7.48,16.26 7.44,16.58 7.62,16.8 C8.18,17.56 9.06,18 10,18 C10.94,18 11.82,17.56 12.38,16.8 C12.56,16.58 12.52,16.26 12.3,16.1 L12.3,16.1 Z" id="m"></path> </g> </g> </svg>
                                <span class="bell1">0</span>
                                <div class="hover-bell hidden">
                                    <div class="arow"></div>
                                    <div class="hover-bell1">
                                        <div class="bell-header">
                                            <h3>
                                                <text>Activities</text>
                                            </h3>
                                        </div>
                                        <div class="bell-body">
                                            <div class="bell-content">
                                                <svg viewBox="0 0 188 220" version="1.1" xmlns="http://www.w3.org/2000/svg">           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">               <g transform="translate(-183.000000, -315.000000)" fill="#D5D5D5">                   <g transform="translate(55.000000, 305.000000)">                       <path d="M314.603832,179.039847 L314.603832,170.587855 C314.603832,162.473942 310.884955,154.698109 304.461441,149.626914 C293.304811,140.836842 285.867058,127.989813 283.83858,113.452386 L274.710428,50.2314836 C266.934595,45.1602882 258.144523,41.7794912 249.354451,39.4129334 C248.002132,38.736774 246.987893,37.7225349 246.987893,36.0321364 L246.987893,35.355977 C246.987893,21.4947096 235.493183,10 221.631916,10 C207.770648,10 196.275939,21.4947096 196.275939,35.355977 C196.275939,37.3844552 195.2617,38.736774 193.571301,39.0748537 C184.781229,41.4414115 176.329237,44.8222085 168.553404,49.8934039 L159.425252,113.452386 C157.396774,127.989813 149.959021,140.836842 138.802391,149.626914 C132.378877,154.698109 128.66,162.473942 128.66,170.587855 L128.66,179.039847 L314.603832,179.039847 Z M221.631916,43.8079694 C216.8988,43.8079694 213.179923,40.0890928 213.179923,35.355977 C213.179923,30.6228613 216.8988,26.9039847 221.631916,26.9039847 C226.365032,26.9039847 230.083908,30.6228613 230.083908,35.355977 C230.083908,40.0890928 226.365032,43.8079694 221.631916,43.8079694 Z M197.966337,195.943832 C196.952098,198.648469 196.275939,201.353107 196.275939,204.395824 C196.275939,218.257091 207.770648,229.751801 221.631916,229.751801 C235.493183,229.751801 246.987893,218.257091 246.987893,204.395824 C246.987893,201.353107 246.311733,198.648469 245.297494,195.943832 L197.966337,195.943832 Z"></path>                   </g>               </g>           </g>       </svg>
                                                <h1>No Activities</h1>
                                                <p>Get notified when other people you're collaborating with add files, create and assign to-dos in shared lists.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="near2">
                                <svg class="messenger" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="conversations"> <path d="M3.46,18 C3.28,17.98 3.1,17.86 3.04,17.68 C2.96,17.5 3,17.3 3.12,17.16 C4.1,16.08 4.3,14.12 3.54,13.12 C3.18,12.64 2.72,12 2.42,11.26 C2.14,10.52 2,9.76 2,9 C2,5.14 5.58,2 10,2 C14.42,2 18,5.14 18,9 C18,12.82 14.46,15.96 10.08,16 L10,16 C8.7,16 7.42,15.72 6.28,15.2 C6.02,15.08 5.92,14.78 6.04,14.54 C6.14,14.28 6.44,14.18 6.7,14.28 C7.68,14.74 8.8,14.98 9.92,15 L10,15 C13.86,15 17,12.3 17,9 C17,5.68 13.86,3 10,3 C6.14,3 3,5.68 3,9 C3,9.64 3.12,10.28 3.36,10.88 C3.6,11.52 4,12.08 4.34,12.52 C5.2,13.64 5.22,15.52 4.48,16.96 C5.2,16.84 5.92,16.56 6.52,16.1 C6.74,15.94 7.06,15.98 7.22,16.2 C7.38,16.42 7.34,16.74 7.12,16.9 C6.16,17.62 5,18 3.82,18 L3.46,18 Z" id="I"></path> </g> </g> </svg>
                                <span class="messenger1">0</span>
                                <div class="hover-messenger hidden">
                                    <div class="arow"></div>
                                    <div class="hover-messenger1">
                                        <div class="messenger-header">
                                            <h3>
                                                <text>Conversations</text>
                                            </h3>
                                        </div>
                                        <div class="messenger-body">
                                            <div class="messenger-content">
                                                <svg viewBox="0 0 311 225" version="1.1" xmlns="http://www.w3.org/2000/svg">           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">               <g transform="translate(-171.000000, -314.000000)" fill-opacity="0.426941803" fill="#A3A3A3">                   <g transform="translate(55.000000, 305.000000)">                       <path d="M294.605267,178.281513 C307.457215,195.55639 329.751489,207 355.18,207 C363.64,223.74 380.92,234.18 399.82,233.82 L400.18,233.82 C393.52,229.14 389.56,221.58 389.56,213.66 C389.38,206.1 392.8,198.9 398.56,194.04 C415.84,182.52 427,164.34 427,144 C427,109.08 394.78,81 355,81 C347.732898,81 340.718094,81.937109 334.105931,83.6818347 C335.192798,89.2714344 335.758877,95.0202169 335.758877,100.889173 C335.758877,131.893283 319.797048,159.687193 294.605267,178.281513 L294.605267,178.281513 Z M220,9.08 C162.54,9.08 116,49.64 116,100.08 C116,129.46 132.12,155.72 157.08,172.36 C165.4,179.38 170.34,189.78 170.08,200.7 C170.08,212.14 164.36,223.06 154.74,229.82 L155.26,229.82 C182.56,230.34 207.52,215.26 219.74,191.08 C277.46,191.08 324,150.26 324,100.08 C324,49.64 277.46,9.08 220,9.08 Z"></path>                   </g>               </g>           </g>       </svg>
                                                <h1>No Conversations</h1>
                                                <p>Start a conversation now by commenting on a to-do in a shared list.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-mid1" id="scroll-1">    
                    <div id="chap2">
                        <div class="one-chap2">
                            <span class="one-avatar">
                                <svg class="inbox" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M10,15 C8.8,15 7.78,14.14 7.56,13 L2.5,13 C2.22,13 2,12.78 2,12.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,12.5 C18,12.78 17.78,13 17.5,13 L12.44,13 C12.22,14.14 11.2,15 10,15 L10,15 Z M3,12 L8,12 C8.28,12 8.5,12.22 8.5,12.5 C8.5,13.32 9.18,14 10,14 C10.82,14 11.5,13.32 11.5,12.5 C11.5,12.22 11.72,12 12,12 L17,12 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,12 Z M5.5,6 C5.22,6 5,5.78 5,5.5 C5,5.22 5.22,5 5.5,5 L14.5,5 C14.78,5 15,5.22 15,5.5 C15,5.78 14.78,6 14.5,6 L5.5,6 Z M5.5,8 C5.22,8 5,7.78 5,7.5 C5,7.22 5.22,7 5.5,7 L14.5,7 C14.78,7 15,7.22 15,7.5 C15,7.78 14.78,8 14.5,8 L5.5,8 Z M5.5,10 C5.22,10 5,9.78 5,9.5 C5,9.22 5.22,9 5.5,9 L14.5,9 C14.78,9 15,9.22 15,9.5 C15,9.78 14.78,10 14.5,10 L5.5,10 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,14.5 C2,14.22 2.22,14 2.5,14 C2.78,14 3,14.22 3,14.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,14.5 C17,14.22 17.22,14 17.5,14 C17.78,14 18,14.22 18,14.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z" id="A"></path> </g> </g> </svg>
                            </span>
                        </div>
                        <span class="one-avatar1" id="none"> 
                            <text>Inbox</text>
                        </span>
                    </div>
                    <div class="big-chap3" method="POST"> 
                        <?php
                        // require('xuly.php');
                         $userId = $_SESSION['id'];
                         $email1 = $_SESSION['email'];
                         $listName = $_POST['list']; 
                        //  print_r($email1); 
                        $sql = "SELECT * from tb_list inner join tb_user_list on tb_user_list.userId=$userId and tb_user_list.listId = tb_list.id
                                ";
                                $stmt = $db->prepare($sql);
                                $stmt->execute(array($sql));
                               $data = $stmt->fetch(PDO::FETCH_ASSOC); 
                        // $sql1 = "INSERT into tb_list(name, userId) VALUES('$userId','$listName')";
                        // $stmt1 = $db->prepare($sql1);
                        // $stmt1->execute(array($sql1));
                        // $data1 = $stmt1->fetchAl(PDO::FETCH_ASSOC);
                            //    <a href="showTask.php?list_id='.$row['id'].'" class="taskId">
                            //<span class="idList">'.$row['id'].'</span>
                    foreach($db->query($sql) as $row){
                        print_r( 
                        '<ul class="chap3" name="list">
                        
                            <li class="one-chap3" name="test" >
                            
                                <span class="list-icon">
                                    <svg class="list rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="list"> <path d="M3,7 C2.44,7 2,6.56 2,6 L2,5 C2,4.44 2.44,4 3,4 L4,4 C4.56,4 5,4.44 5,5 L5,6 C5,6.56 4.56,7 4,7 L3,7 Z M4,5 L3,5 L3,6 L4,6 L4,5 Z M7.5,6 C7.22,6 7,5.78 7,5.5 C7,5.22 7.22,5 7.5,5 L17.5,5 C17.78,5 18,5.22 18,5.5 C18,5.78 17.78,6 17.5,6 L7.5,6 Z M3,12 C2.44,12 2,11.56 2,11 L2,10 C2,9.44 2.44,9 3,9 L4,9 C4.56,9 5,9.44 5,10 L5,11 C5,11.56 4.56,12 4,12 L3,12 Z M4,10 L3,10 L3,11 L4,11 L4,10 Z M7.5,11 C7.22,11 7,10.78 7,10.5 C7,10.22 7.22,10 7.5,10 L17.5,10 C17.78,10 18,10.22 18,10.5 C18,10.78 17.78,11 17.5,11 L7.5,11 Z M3,17 C2.44,17 2,16.56 2,16 L2,15 C2,14.44 2.44,14 3,14 L4,14 C4.56,14 5,14.44 5,15 L5,16 C5,16.56 4.56,17 4,17 L3,17 Z M4,15 L3,15 L3,16 L4,16 L4,15 Z M7.5,16 C7.22,16 7,15.78 7,15.5 C7,15.22 7.22,15 7.5,15 L17.5,15 C17.78,15 18,15.22 18,15.5 C18,15.78 17.78,16 17.5,16 L7.5,16 Z" id="K"> </path> </g> </g> </svg>
                                </span>
                                <span class="title" id="none">
                                '.$row["name"].'</span>
                                <input class="idList" name="lay1" value="'.$row['id'].'" style="width: 25px;">
                             
                                <span class="list-options" id="none">
                                    <svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>
                                </span>
                            </li>
                            
                        </ul>');
                            $listId = $_GET['list_id'];
                            $_SESSION['tb_list.id']=$listId;
                            $_SESSION['tb_list.name']=$data['name'];
                           
                        }
            
                    // $s= count($data);
                    // for ($i=1; $i < ; $i++) { 
                    //     # code...
                    //           echo 
                    //     '<ul class="chap3" name="list">
                    //         <li class="one-chap3" name="test" >
                    //             <span class="list-icon">
                    //                 <svg class="list rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="list"> <path d="M3,7 C2.44,7 2,6.56 2,6 L2,5 C2,4.44 2.44,4 3,4 L4,4 C4.56,4 5,4.44 5,5 L5,6 C5,6.56 4.56,7 4,7 L3,7 Z M4,5 L3,5 L3,6 L4,6 L4,5 Z M7.5,6 C7.22,6 7,5.78 7,5.5 C7,5.22 7.22,5 7.5,5 L17.5,5 C17.78,5 18,5.22 18,5.5 C18,5.78 17.78,6 17.5,6 L7.5,6 Z M3,12 C2.44,12 2,11.56 2,11 L2,10 C2,9.44 2.44,9 3,9 L4,9 C4.56,9 5,9.44 5,10 L5,11 C5,11.56 4.56,12 4,12 L3,12 Z M4,10 L3,10 L3,11 L4,11 L4,10 Z M7.5,11 C7.22,11 7,10.78 7,10.5 C7,10.22 7.22,10 7.5,10 L17.5,10 C17.78,10 18,10.22 18,10.5 C18,10.78 17.78,11 17.5,11 L7.5,11 Z M3,17 C2.44,17 2,16.56 2,16 L2,15 C2,14.44 2.44,14 3,14 L4,14 C4.56,14 5,14.44 5,15 L5,16 C5,16.56 4.56,17 4,17 L3,17 Z M4,15 L3,15 L3,16 L4,16 L4,15 Z M7.5,16 C7.22,16 7,15.78 7,15.5 C7,15.22 7.22,15 7.5,15 L17.5,15 C17.78,15 18,15.22 18,15.5 C18,15.78 17.78,16 17.5,16 L7.5,16 Z" id="K"> </path> </g> </g> </svg>
                    //             </span>
                    //             <span class="title" id="none">'.$row["name"].'</span>
                    //             <span class="list-options" id="none">
                    //                 <svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>
                    //             </span>
                    //         </li>
                    //     </ul>';
                    // }
                    ?>
                       
                    </div>
                    <!-- <div class="big1-chap3"></div> -->
                </div>
                <div id="left-foot">
                    <span class="foot1">
                        <svg class="plus-small" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M10,10l0,6.5c-0.003,0.053 -0.008,0.103 -0.024,0.155c-0.038,0.116 -0.12,0.217 -0.226,0.278c-0.047,0.027 -0.094,0.042 -0.146,0.056c-0.052,0.008 -0.051,0.008 -0.104,0.011c-0.053,-0.003 -0.103,-0.008 -0.155,-0.024c-0.15,-0.05 -0.271,-0.171 -0.321,-0.321c-0.016,-0.052 -0.021,-0.102 -0.024,-0.155l0,-6.5l-6.5,0c-0.046,-0.002 -0.058,-0.001 -0.104,-0.011c-0.103,-0.022 -0.197,-0.076 -0.268,-0.154c-0.169,-0.188 -0.169,-0.482 0,-0.67c0.035,-0.038 0.077,-0.072 0.122,-0.098c0.078,-0.045 0.161,-0.062 0.25,-0.067l6.5,0l0,-6.5c0.005,-0.089 0.022,-0.172 0.067,-0.25c0.126,-0.219 0.406,-0.31 0.636,-0.207c0.048,0.022 0.093,0.05 0.132,0.085c0.078,0.071 0.132,0.165 0.154,0.268c0.01,0.046 0.009,0.058 0.011,0.104l0,6.5l6.5,0c0.046,0.002 0.058,0.001 0.104,0.011c0.103,0.022 0.197,0.076 0.268,0.154c0.169,0.188 0.169,0.482 0,0.67c-0.035,0.038 -0.077,0.072 -0.122,0.098c-0.078,0.045 -0.161,0.062 -0.25,0.067l-6.5,0Z"></path> </g> </svg>
                    </span>
                    <span class="foot2" id="none">
                        <text> Create list</text>
                    </span>
                    
                </div>
                
            </div>
            <div class="main-mid">
                <div class="mid-header">
                    <h1>Groceries</h1>
                    <div class="header-m">
                        <div class="header-share disabled">
                            <div class="m1-1">
                                <svg class="share rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-disabled="false"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="share"> <path d="M11.5025,12 C13.7825,12 15.5025,8.84 15.5025,6 C15.5025,3.8 13.7025,2 11.5025,2 C9.3025,2 7.5025,3.8 7.5025,6 C7.5025,8.5 9.0225,12 11.5025,12 L11.5025,12 Z M11.5025,3 C13.1625,3 14.5025,4.34 14.5025,6 C14.5025,8.26 13.1225,11 11.5025,11 C9.8425,11 8.5025,8.26 8.5025,6 C8.5025,4.34 9.8425,3 11.5025,3 L11.5025,3 Z M4.5025,10 L6.0025,10 C6.2825,10 6.5025,9.78 6.5025,9.5 C6.5025,9.22 6.2825,9 6.0025,9 L4.5025,9 L4.5025,7.5 C4.5025,7.22 4.2825,7 4.0025,7 C3.7225,7 3.5025,7.22 3.5025,7.5 L3.5025,9 L2.0025,9 C1.7225,9 1.5025,9.22 1.5025,9.5 C1.5025,9.78 1.7225,10 2.0025,10 L3.5025,10 L3.5025,11.5 C3.5025,11.78 3.7225,12 4.0025,12 C4.2825,12 4.5025,11.78 4.5025,11.5 L4.5025,10 Z M18.2625,14.88 C18.0625,14 17.4025,13.28 16.5225,13.04 L14.2225,12.36 C14.0825,12.32 13.9625,12.26 13.8625,12.14 C13.6625,11.96 13.3425,11.96 13.1625,12.16 C12.9625,12.34 12.9625,12.66 13.1625,12.86 C13.3825,13.08 13.6425,13.24 13.9425,13.32 L16.2425,14 C16.7625,14.14 17.1625,14.58 17.2825,15.1 L17.4425,15.8 C16.9025,16.16 15.2025,17 11.5025,17 C7.7825,17 6.1025,16.14 5.5625,15.8 L5.7225,15.04 C5.8425,14.5 6.2625,14.06 6.8025,13.92 L9.0425,13.32 C9.3425,13.24 9.6225,13.08 9.8625,12.86 C10.0425,12.66 10.0425,12.34 9.8625,12.14 C9.6625,11.96 9.3425,11.96 9.1425,12.14 C9.0425,12.24 8.9225,12.32 8.7825,12.36 L6.5425,12.96 C5.6425,13.2 4.9625,13.92 4.7425,14.82 L4.5225,15.9 C4.4825,16.06 4.5225,16.24 4.6425,16.36 C4.7225,16.42 6.3625,18 11.5025,18 C16.6425,18 18.2825,16.42 18.3625,16.36 C18.4825,16.24 18.5225,16.06 18.4825,15.9 L18.2625,14.88 Z" id="W"></path> </g> </g> </svg>
                            </div>
                            <div class="tab-text">Share</div>
                        </div>
                        <div class="header-sort">
                            <div class="m1-1">
                                <svg class="sort-az" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-disabled="true"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="sort-az"> <path d="M14.2,2.3 C14.12,2.12 13.94,2 13.76,2 L13.26,2 C13.06,2 12.88,2.12 12.8,2.3 L10.04,8.3 C9.94,8.54 10.04,8.84 10.3,8.96 C10.54,9.08 10.84,8.96 10.96,8.7 L11.74,7 L15.26,7 L16.04,8.7 C16.14,8.9 16.32,9 16.5,9 C16.58,9 16.64,8.98 16.7,8.96 C16.96,8.84 17.06,8.54 16.96,8.3 L14.2,2.3 Z M5.64,3.02 C5.56,3 5.48,3 5.4,3 C5.3,3.02 5.22,3.08 5.14,3.16 L3.14,5.14 C2.96,5.34 2.96,5.66 3.14,5.86 C3.34,6.04 3.66,6.04 3.86,5.86 L5,4.7 L5,8.5 C5,8.78 5.22,9 5.5,9 C5.78,9 6,8.78 6,8.5 L6,4.7 L7.14,5.86 C7.24,5.96 7.38,6 7.5,6 C7.62,6 7.76,5.96 7.86,5.86 C8.04,5.66 8.04,5.34 7.86,5.14 C5.68,2.98 5.8,3.08 5.64,3.02 L5.64,3.02 Z M14.8,6 L12.2,6 L13.5,3.16 L14.8,6 Z M6,15.3 L6,11.5 C6,11.22 5.78,11 5.5,11 C5.22,11 5,11.22 5,11.5 L5,15.3 L3.86,14.14 C3.66,13.96 3.34,13.96 3.14,14.14 C2.96,14.34 2.96,14.66 3.14,14.86 C5.28,17 5.2,16.96 5.4,17 C5.56,17.02 5.74,16.98 5.86,16.84 L7.86,14.86 C8.04,14.66 8.04,14.34 7.86,14.14 C7.66,13.96 7.34,13.96 7.14,14.14 L6,15.3 Z M15.94,11.26 C15.86,11.1 15.68,11 15.5,11 L11.5,11 C11.22,11 11,11.22 11,11.5 C11,11.78 11.22,12 11.5,12 L14.56,12 L11.08,17.22 C10.98,17.38 10.98,17.58 11.06,17.74 C11.14,17.9 11.32,18 11.5,18 L15.5,18 C15.78,18 16,17.78 16,17.5 C16,17.22 15.78,17 15.5,17 L12.44,17 L15.92,11.78 C16.02,11.62 16.02,11.42 15.94,11.26 L15.94,11.26 Z" id="sort"></path> </g> </g> </svg>
                            </div>
                            <div class="tab-text">Sort</div>
                            <div class="hover-sort">
                                <ul class="sort-ul">
                                <li class="sort-li">
                                    <a href="#">
                                        <svg class="sort-az" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-disabled="false"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="sort-az"> <path d="M14.2,2.3 C14.12,2.12 13.94,2 13.76,2 L13.26,2 C13.06,2 12.88,2.12 12.8,2.3 L10.04,8.3 C9.94,8.54 10.04,8.84 10.3,8.96 C10.54,9.08 10.84,8.96 10.96,8.7 L11.74,7 L15.26,7 L16.04,8.7 C16.14,8.9 16.32,9 16.5,9 C16.58,9 16.64,8.98 16.7,8.96 C16.96,8.84 17.06,8.54 16.96,8.3 L14.2,2.3 Z M5.64,3.02 C5.56,3 5.48,3 5.4,3 C5.3,3.02 5.22,3.08 5.14,3.16 L3.14,5.14 C2.96,5.34 2.96,5.66 3.14,5.86 C3.34,6.04 3.66,6.04 3.86,5.86 L5,4.7 L5,8.5 C5,8.78 5.22,9 5.5,9 C5.78,9 6,8.78 6,8.5 L6,4.7 L7.14,5.86 C7.24,5.96 7.38,6 7.5,6 C7.62,6 7.76,5.96 7.86,5.86 C8.04,5.66 8.04,5.34 7.86,5.14 C5.68,2.98 5.8,3.08 5.64,3.02 L5.64,3.02 Z M14.8,6 L12.2,6 L13.5,3.16 L14.8,6 Z M6,15.3 L6,11.5 C6,11.22 5.78,11 5.5,11 C5.22,11 5,11.22 5,11.5 L5,15.3 L3.86,14.14 C3.66,13.96 3.34,13.96 3.14,14.14 C2.96,14.34 2.96,14.66 3.14,14.86 C5.28,17 5.2,16.96 5.4,17 C5.56,17.02 5.74,16.98 5.86,16.84 L7.86,14.86 C8.04,14.66 8.04,14.34 7.86,14.14 C7.66,13.96 7.34,13.96 7.14,14.14 L6,15.3 Z M15.94,11.26 C15.86,11.1 15.68,11 15.5,11 L11.5,11 C11.22,11 11,11.22 11,11.5 C11,11.78 11.22,12 11.5,12 L14.56,12 L11.08,17.22 C10.98,17.38 10.98,17.58 11.06,17.74 C11.14,17.9 11.32,18 11.5,18 L15.5,18 C15.78,18 16,17.78 16,17.5 C16,17.22 15.78,17 15.5,17 L12.44,17 L15.92,11.78 C16.02,11.62 16.02,11.42 15.94,11.26 L15.94,11.26 Z" id="sort"></path> </g> </g> </svg>
                                        <text>Sort Alphabetically</text>
                                    </a>
                                </li>
                                <li class="sort-li">
                                        <a href="#">
                                            <svg class="sort-date" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="sort-date"> <path d="M2.5,7 C2.22,7 2,6.78 2,6.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,6.5 C18,6.78 17.78,7 17.5,7 L2.5,7 Z M3,6 L17,6 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,6 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,8.5 C2,8.22 2.22,8 2.5,8 C2.78,8 3,8.22 3,8.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,8.5 C17,8.22 17.22,8 17.5,8 C17.78,8 18,8.22 18,8.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z M9,13.12 C9.12,13.12 9.2,13.16 9.26,13.22 C9.3,13.28 9.34,13.34 9.34,13.44 L9.34,14 L5.86,14 L5.86,13.68 C5.86,13.62 5.88,13.56 5.9,13.5 C5.94,13.42 5.98,13.36 6.04,13.3 L7.52,11.82 C7.64,11.68 7.76,11.56 7.86,11.46 C7.94,11.34 8.02,11.22 8.1,11.12 C8.16,11 8.2,10.88 8.24,10.78 C8.28,10.66 8.28,10.54 8.28,10.4 C8.28,10.18 8.22,10.02 8.12,9.9 C8,9.78 7.84,9.72 7.62,9.72 C7.54,9.72 7.46,9.74 7.38,9.76 C7.3,9.8 7.22,9.82 7.16,9.88 C7.1,9.92 7.06,9.98 7,10.04 C6.96,10.1 6.94,10.16 6.92,10.24 C6.88,10.36 6.82,10.44 6.74,10.46 C6.68,10.5 6.58,10.52 6.44,10.5 L5.94,10.4 C5.98,10.16 6.04,9.94 6.16,9.76 C6.26,9.58 6.38,9.42 6.54,9.3 C6.68,9.18 6.86,9.1 7.06,9.04 C7.24,8.96 7.46,8.94 7.68,8.94 C7.92,8.94 8.14,8.98 8.32,9.04 C8.52,9.12 8.68,9.22 8.82,9.34 C8.96,9.46 9.08,9.62 9.14,9.8 C9.22,9.96 9.26,10.16 9.26,10.38 C9.26,10.56 9.24,10.74 9.18,10.88 C9.14,11.04 9.06,11.2 8.96,11.34 C8.88,11.48 8.78,11.62 8.66,11.74 L8.28,12.16 L7.2,13.24 C7.32,13.2 7.44,13.18 7.56,13.16 C7.68,13.14 7.78,13.12 7.88,13.12 L9,13.12 Z M10.48,9 L13.96,9 L13.96,9.4 C13.96,9.52 13.96,9.62 13.92,9.7 L13.86,9.88 L12.02,13.68 C11.98,13.78 11.92,13.84 11.84,13.9 C11.76,13.96 11.66,14 11.52,14 L10.84,14 L12.7,10.28 L12.84,10.04 C12.9,9.98 12.94,9.9 13,9.84 L10.7,9.84 C10.64,9.84 10.6,9.82 10.54,9.78 C10.5,9.74 10.48,9.68 10.48,9.62 L10.48,9 Z" id="c"></path> </g> </g> </svg>
                                            <text>Sort by Due Date</text>
                                        </a>
                                </li>
                                <li class="sort-li">
                                        <a href="#">
                                            <svg class="sort-creation" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="sort-creation"> <path d="M9.5,17 C5.36,17 2,13.64 2,9.5 C2,5.36 5.36,2 9.5,2 C13.64,2 17,5.36 17,9.5 C17,9.78 16.78,10 16.5,10 C16.22,10 16,9.78 16,9.5 C16,5.92 13.08,3 9.5,3 C5.92,3 3,5.92 3,9.5 C3,13.08 5.92,16 9.5,16 C9.78,16 10,16.22 10,16.5 C10,16.78 9.78,17 9.5,17 L9.5,17 Z M6.5,11 C6.22,11 6,10.78 6,10.5 C6,10.22 6.22,10 6.5,10 L10,10 L10,5.5 C10,5.22 10.22,5 10.5,5 C10.78,5 11,5.22 11,5.5 L11,10.5 C11,10.78 10.78,11 10.5,11 L6.5,11 Z M12.5,18 C11.68,18 11,17.32 11,16.5 L11,12.5 C11,11.68 11.68,11 12.5,11 L16.5,11 C17.32,11 18,11.68 18,12.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L12.5,18 Z M12.5,12 C12.22,12 12,12.22 12,12.5 L12,16.5 C12,16.78 12.22,17 12.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,12.5 C17,12.22 16.78,12 16.5,12 L12.5,12 Z M14.5,16 C14.22,16 14,15.78 14,15.5 L14,14.3 L13.72,14.44 C13.48,14.58 13.18,14.48 13.06,14.22 C12.92,13.98 13.02,13.68 13.28,13.56 L14.28,13.06 C14.44,12.98 14.62,12.98 14.76,13.08 C14.92,13.16 15,13.32 15,13.5 L15,15.5 C15,15.78 14.78,16 14.5,16 L14.5,16 Z" id="≠"></path> </g> </g> </svg>
                                            <text>Sort by Creation Date</text>
                                        </a>
                                </li>
                                <li class="sort-li-one">
                                        
                                            <svg class="assigned" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <g id="Rectangle-3-+-A" transform="translate(1.000000, 2.000000)"> <path d="M10,10 C12.28,10 14,6.84 14,4 C14,1.8 12.2,0 10,0 C7.8,0 6,1.8 6,4 C6,6.5 7.52,10 10,10 L10,10 Z M4.94,7.74 C4.98,7.66 5,7.58 5,7.5 C5,7.42 4.98,7.34 4.94,7.26 C4.92,7.22 4.9,7.18 4.86,7.14 L2.86,5.14 C2.66,4.96 2.34,4.96 2.14,5.14 C1.96,5.34 1.96,5.66 2.14,5.86 L3.3,7 L0.5,7 C0.22,7 0,7.22 0,7.5 C0,7.78 0.22,8 0.5,8 L3.3,8 L2.14,9.14 C1.96,9.34 1.96,9.66 2.14,9.86 C2.24,9.96 2.38,10 2.5,10 C2.62,10 2.76,9.96 2.86,9.86 L4.86,7.86 C4.9,7.82 4.92,7.78 4.94,7.74 L4.94,7.74 Z M16.76,12.88 C16.56,12 15.9,11.28 15.02,11.04 L12.72,10.36 C12.58,10.32 12.46,10.26 12.36,10.14 C12.16,9.96 11.84,9.96 11.66,10.16 C11.46,10.34 8.54,10.34 8.36,10.14 C8.16,9.96 7.84,9.96 7.64,10.14 C7.54,10.24 7.42,10.32 7.28,10.36 L5.04,10.96 C4.14,11.2 3.46,11.92 3.24,12.82 L3.02,13.9 C2.98,14.06 3.02,14.24 3.14,14.36 C3.22,14.42 4.86,16 10,16 C15.14,16 16.78,14.42 16.86,14.36 C16.98,14.24 17.02,14.06 16.98,13.9 L16.76,12.88 Z" fill-opacity="0.06"></path> <path d="M10,10 C12.28,10 14,6.84 14,4 C14,1.8 12.2,0 10,0 C7.8,0 6,1.8 6,4 C6,6.5 7.52,10 10,10 L10,10 Z M10,1 C11.66,1 13,2.34 13,4 C13,6.26 11.62,9 10,9 C8.34,9 7,6.26 7,4 C7,2.34 8.34,1 10,1 L10,1 Z M4.94,7.74 C4.98,7.66 5,7.58 5,7.5 C5,7.42 4.98,7.34 4.94,7.26 C4.92,7.22 4.9,7.18 4.86,7.14 L2.86,5.14 C2.66,4.96 2.34,4.96 2.14,5.14 C1.96,5.34 1.96,5.66 2.14,5.86 L3.3,7 L0.5,7 C0.22,7 0,7.22 0,7.5 C0,7.78 0.22,8 0.5,8 L3.3,8 L2.14,9.14 C1.96,9.34 1.96,9.66 2.14,9.86 C2.24,9.96 2.38,10 2.5,10 C2.62,10 2.76,9.96 2.86,9.86 L4.86,7.86 C4.9,7.82 4.92,7.78 4.94,7.74 L4.94,7.74 Z M16.76,12.88 C16.56,12 15.9,11.28 15.02,11.04 L12.72,10.36 C12.58,10.32 12.46,10.26 12.36,10.14 C12.16,9.96 11.84,9.96 11.66,10.16 C11.46,10.34 11.46,10.66 11.66,10.86 C11.88,11.08 12.14,11.24 12.44,11.32 L14.74,12 C15.26,12.14 15.66,12.58 15.78,13.1 L15.94,13.8 C15.4,14.16 13.7,15 10,15 C6.3,15 4.6,14.14 4.06,13.8 L4.22,13.04 C4.34,12.5 4.76,12.06 5.3,11.92 L7.54,11.32 C7.84,11.24 8.12,11.08 8.36,10.86 C8.54,10.66 8.54,10.34 8.36,10.14 C8.16,9.96 7.84,9.96 7.64,10.14 C7.54,10.24 7.42,10.32 7.28,10.36 L5.04,10.96 C4.14,11.2 3.46,11.92 3.24,12.82 L3.02,13.9 C2.98,14.06 3.02,14.24 3.14,14.36 C3.22,14.42 4.86,16 10,16 C15.14,16 16.78,14.42 16.86,14.36 C16.98,14.24 17.02,14.06 16.98,13.9 L16.76,12.88 Z"> </path> </g> </g> </g> </svg>
                                            <text>Sort by Assignee</text>
                                        
                                </li>
                                <li class="sort-li">
                                        <a href="#">
                                            <svg class="starred" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="starred"> <g id="Rectangle-3-+-A" transform="translate(1.000000, 0.000000)"> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z" id="C"></path> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z" id="D" opacity="0.06"> </path> </g> </g> </g> </svg>
                                            <text>Sort by Priority</text>
                                        </a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-more">
                            <div class="m1-1">
                                <svg class="folder-option" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g id="Layer 1"> <path d="M3.5,11c0.828,0 1.5,-0.672 1.5,-1.5c0,-0.828 -0.672,-1.5 -1.5,-1.5c-0.828,0 -1.5,0.672 -1.5,1.5c0,0.828 0.672,1.5 1.5,1.5Z"></path> <path d="M9.5,11c0.828,0 1.5,-0.672 1.5,-1.5c0,-0.828 -0.672,-1.5 -1.5,-1.5c-0.828,0 -1.5,0.672 -1.5,1.5c0,0.828 0.672,1.5 1.5,1.5Z"></path> <path d="M15.5,11c0.828,0 1.5,-0.672 1.5,-1.5c0,-0.828 -0.672,-1.5 -1.5,-1.5c-0.828,0 -1.5,0.672 -1.5,1.5c0,0.828 0.672,1.5 1.5,1.5Z"></path> </g> </svg>
                            </div>
                            <div class="tab-text">More</div>
                            <div class="hover-more">
                                <ul class="more-ul">
                                    <li class="more-li">
                                        <a href="#">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="duplicate" sketch:type="MSArtboardGroup"> <path d="M15.5,2 L7.5,2 C6.121,2 5,3.121 5,4.5 L5,6 L4.5,6 C3.121,6 2,7.121 2,8.5 C2,8.776 2.224,9 2.5,9 C2.776,9 3,8.776 3,8.5 C3,7.673 3.673,7 4.5,7 L5,7 L5,12.5 C5,13.879 6.121,15 7.5,15 L13,15 L13,15.5 C13,16.327 12.327,17 11.5,17 C11.224,17 11,17.224 11,17.5 C11,17.776 11.224,18 11.5,18 C12.879,18 14,16.879 14,15.5 L14,15 L15.5,15 C16.879,15 18,13.879 18,12.5 L18,4.5 C18,3.121 16.879,2 15.5,2 L15.5,2 Z M17,12.5 C17,13.327 16.327,14 15.5,14 L7.5,14 C6.673,14 6,13.327 6,12.5 L6,4.5 C6,3.673 6.673,3 7.5,3 L15.5,3 C16.327,3 17,3.673 17,4.5 L17,12.5 Z M2.5,14 C2.776,14 3,13.776 3,13.5 L3,11.5 C3,11.224 2.776,11 2.5,11 C2.224,11 2,11.224 2,11.5 L2,13.5 C2,13.776 2.224,14 2.5,14 Z M8.5,17 L6.5,17 C6.224,17 6,17.224 6,17.5 C6,17.776 6.224,18 6.5,18 L8.5,18 C8.776,18 9,17.776 9,17.5 C9,17.224 8.776,17 8.5,17 Z M4.5,17 C3.673,17 3,16.327 3,15.5 C3,15.224 2.776,15 2.5,15 C2.224,15 2,15.224 2,15.5 C2,16.879 3.121,18 4.5,18 C4.776,18 5,17.776 5,17.5 C5,17.224 4.776,17 4.5,17 Z M14.691,5.038 C14.63,5.013 14.565,5 14.5,5 L10.5,5 C10.224,5 10,5.224 10,5.5 C10,5.776 10.224,6 10.5,6 L13.293,6 L10.146,9.146 C9.951,9.342 9.951,9.658 10.146,9.853 C10.244,9.951 10.372,10 10.5,10 C10.628,10 10.756,9.951 10.853,9.853 L14,6.707 L14,9.5 C14,9.776 14.224,10 14.5,10 C14.776,10 15,9.776 15,9.5 L15,5.5 C15,5.435 14.987,5.37 14.962,5.309 C14.911,5.187 14.813,5.089 14.691,5.038" id="Fill-1" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                                            <text>Duplicate List</text>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a href="#">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="copy" sketch:type="MSArtboardGroup"> <path d="M12.7921708,6.5 L8.647,10.646 C8.451,10.842 8.451,11.158 8.647,11.353 C8.744,11.451 8.872,11.5 9,11.5 C9.128,11.5 9.256,11.451 9.354,11.353 L13.5,7.207 L13.5,10 C13.5,10.276 13.724,10.5 14,10.5 C14.276,10.5 14.5,10.276 14.5,10 L14.5,6.01573317 C14.5041978,5.88263558 14.4555311,5.7480518 14.354,5.646 C14.2519482,5.54446887 14.1173644,5.4958022 13.9841257,5.5 L10,5.5 C9.724,5.5 9.5,5.724 9.5,6 C9.5,6.276 9.724,6.5 10,6.5 L12.7921708,6.5 L12.7921708,6.5 Z M2.5,5.5 C2.224,5.5 2,5.276 2,5 L2,4.5 C2,3.121 3.121,2 4.5,2 L5,2 C5.276,2 5.5,2.224 5.5,2.5 C5.5,2.776 5.276,3 5,3 L4.5,3 C3.673,3 3,3.673 3,4.5 L3,5 C3,5.276 2.776,5.5 2.5,5.5 Z M5,18 L4.5,18 C3.121,18 2,16.879 2,15.5 L2,15 C2,14.724 2.224,14.5 2.5,14.5 C2.776,14.5 3,14.724 3,15 L3,15.5 C3,16.327 3.673,17 4.5,17 L5,17 C5.276,17 5.5,17.224 5.5,17.5 C5.5,17.776 5.276,18 5,18 Z M15.5,18 L15,18 C14.724,18 14.5,17.776 14.5,17.5 C14.5,17.224 14.724,17 15,17 L15.5,17 C16.327,17 17,16.327 17,15.5 L17,15 C17,14.724 17.224,14.5 17.5,14.5 C17.776,14.5 18,14.724 18,15 L18,15.5 C18,16.879 16.879,18 15.5,18 Z M17.5,5.5 C17.224,5.5 17,5.276 17,5 L17,4.5 C17,3.673 16.327,3 15.5,3 L15,3 C14.724,3 14.5,2.776 14.5,2.5 C14.5,2.224 14.724,2 15,2 L15.5,2 C16.879,2 18,3.121 18,4.5 L18,5 C18,5.276 17.776,5.5 17.5,5.5 Z M2.5,12.5 C2.224,12.5 2,12.276 2,12 L2,8 C2,7.724 2.224,7.5 2.5,7.5 C2.776,7.5 3,7.724 3,8 L3,12 C3,12.276 2.776,12.5 2.5,12.5 Z M17.5,12.5 C17.224,12.5 17,12.276 17,12 L17,8 C17,7.724 17.224,7.5 17.5,7.5 C17.776,7.5 18,7.724 18,8 L18,12 C18,12.276 17.776,12.5 17.5,12.5 Z M12,3 L8,3 C7.724,3 7.5,2.776 7.5,2.5 C7.5,2.224 7.724,2 8,2 L12,2 C12.276,2 12.5,2.224 12.5,2.5 C12.5,2.776 12.276,3 12,3 Z M12,18 L8,18 C7.724,18 7.5,17.776 7.5,17.5 C7.5,17.224 7.724,17 8,17 L12,17 C12.276,17 12.5,17.224 12.5,17.5 C12.5,17.776 12.276,18 12,18 Z" id="Copy" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                                            <text>Copy Selected To-do</text>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a href="#">
                                            <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                                            <text>Email List</text>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a href="#">
                                            <svg class="email" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="email"> <path d="M4.5,17 C3.12,17 2,15.88 2,14.5 L2,5.5 C2,4.12 3.12,3 4.5,3 L15.5,3 C16.88,3 18,4.12 18,5.5 L18,14.5 C18,15.88 16.88,17 15.5,17 L4.5,17 Z M4.5,4 C3.68,4 3,4.68 3,5.5 L3,14.5 C3,15.32 3.68,16 4.5,16 L15.5,16 C16.32,16 17,15.32 17,14.5 L17,5.5 C17,4.68 16.32,4 15.5,4 L4.5,4 Z M10,11.5 C9.88,11.5 9.74,11.46 9.64,11.36 L4.14,5.86 C3.96,5.66 3.96,5.34 4.14,5.14 C4.34,4.96 4.66,4.96 4.86,5.14 L10,10.3 L15.14,5.14 C15.34,4.96 15.66,4.96 15.86,5.14 C16.04,5.34 16.04,5.66 15.86,5.86 L10.36,11.36 C10.26,11.46 10.12,11.5 10,11.5 L10,11.5 Z" id="X"></path> </g> </g> </svg>
                                            <text>Email Selected To-do</text>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a href="#">
                                            <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                                            <text>Print List</text>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a href="#">
                                            <svg class="print" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M4.5,6 C3.12,6 2,7.12 2,8.5 L2,14.5 C2,14.78 2.22,15 2.5,15 L5,15 L5,17.5 C5,17.78 5.22,18 5.5,18 L14.5,18 C14.78,18 15,17.78 15,17.5 L15,15 L17.5,15 C17.78,15 18,14.78 18,14.5 L18,8.5 C18,7.12 16.88,6 15.5,6 L4.5,6 Z M17,14 L15,14 L15,12 L15.5,12 C15.78,12 16,11.78 16,11.5 C16,11.22 15.78,11 15.5,11 L4.5,11 C4.22,11 4,11.22 4,11.5 C4,11.78 4.22,12 4.5,12 L5,12 L5,14 L3,14 L3,8.5 C3,7.68 3.68,7 4.5,7 L15.5,7 C16.32,7 17,7.68 17,8.5 L17,14 Z M14,12 L14,17 L6,17 L6,12 L14,12 Z" id="Z"></path> <path d="M5.5,5 C5.78,5 6,4.78 6,4.5 L6,3 L14,3 L14,4.5 C14,4.78 14.22,5 14.5,5 C14.78,5 15,4.78 15,4.5 L15,2.5 C15,2.22 14.78,2 14.5,2 L5.5,2 C5.22,2 5,2.22 5,2.5 L5,4.5 C5,4.78 5.22,5 5.5,5 L5.5,5 Z" id="Path"></path> </g> </g> </svg>
                                            <text>Print Selected To-do</text>
                                        </a>
                                    </li>
                                    <li class="more-li-one">
                                        <a href="#">
                                            <svg class="do-no-disturb" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="do-no-disturb"> <path d="M15.474,10.7635 C16.694,9.9435 17.494,8.5635 17.494,7.0035 C17.494,4.5235 15.474,2.5035 12.994,2.5035 C11.434,2.5035 10.054,3.3035 9.234,4.5235 L7.354,2.6435 C7.234,2.5035 7.034,2.4635 6.854,2.5235 C6.674,2.5835 6.534,2.7235 6.514,2.9235 L5.514,9.4235 C5.494,9.5835 5.534,9.7435 5.654,9.8435 L10.154,14.3435 C10.254,14.4435 10.374,14.4835 10.494,14.4835 L10.574,14.4835 L17.074,13.4835 C17.274,13.4635 17.414,13.3235 17.474,13.1435 C17.534,12.9635 17.494,12.7635 17.354,12.6435 L15.474,10.7635 Z M12.994,3.5035 C14.914,3.5035 16.494,5.0835 16.494,7.0035 C16.494,8.3835 15.694,9.5835 14.514,10.1635 C14.474,10.1635 14.414,10.1835 14.374,10.2235 C13.954,10.4035 13.474,10.5035 12.994,10.5035 C11.054,10.5035 9.494,8.9435 9.494,7.0035 C9.494,6.5235 9.594,6.0435 9.774,5.6235 C9.814,5.5835 9.834,5.5235 9.834,5.4835 C10.414,4.3035 11.614,3.5035 12.994,3.5035 L12.994,3.5035 Z M15.954,12.6435 L10.674,13.4635 L6.534,9.3235 L7.354,4.0435 L8.774,5.4635 C8.594,5.9435 8.494,6.4635 8.494,7.0035 C8.494,9.4835 10.514,11.5035 12.994,11.5035 C13.534,11.5035 14.054,11.4035 14.534,11.2235 L15.954,12.6435 Z M11.134,8.8635 C11.234,8.9635 11.374,9.0035 11.494,9.0035 C11.614,9.0035 11.754,8.9635 11.854,8.8635 L12.994,7.7035 L14.134,8.8635 C14.234,8.9635 14.374,9.0035 14.494,9.0035 C14.614,9.0035 14.754,8.9635 14.854,8.8635 C15.034,8.6635 15.034,8.3435 14.854,8.1435 L13.694,7.0035 L14.854,5.8635 C15.034,5.6635 15.034,5.3435 14.854,5.1435 C14.654,4.9635 14.334,4.9635 14.134,5.1435 L12.994,6.3035 L11.854,5.1435 C11.654,4.9635 11.334,4.9635 11.134,5.1435 C10.954,5.3435 10.954,5.6635 11.134,5.8635 L12.294,7.0035 L11.134,8.1435 C10.954,8.3435 10.954,8.6635 11.134,8.8635 L11.134,8.8635 Z M6.994,16.3035 C6.714,16.5635 6.294,16.5635 6.014,16.3035 L3.694,13.9835 C3.434,13.7035 3.434,13.2835 3.694,13.0035 L5.354,11.3435 C5.554,11.1435 5.554,10.8435 5.354,10.6435 C5.154,10.4435 4.854,10.4435 4.654,10.6435 L2.994,12.3035 C2.334,12.9635 2.334,14.0235 2.994,14.6835 L5.314,17.0035 C5.654,17.3435 6.074,17.5035 6.514,17.5035 C6.934,17.5035 7.374,17.3435 7.694,17.0035 L9.354,15.3435 C9.554,15.1435 9.554,14.8435 9.354,14.6435 C9.154,14.4435 8.854,14.4435 8.654,14.6435 L6.994,16.3035 Z" id="®"></path> </g> </g> </svg>
                                            <span class="more-span">
                                                <text>Do Not Disturb</text>
                                            </span>
                                            <span class="more-off">
                                                    <text>Off</text>
                                                </span>
                                            <span class="more-on">
                                                <text>On</text>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="more-li">
                                        <a>
                                            <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>
                                            <text>Delete Selected To-do</text>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mid-mid" id="scroll-1">
                    <!-- <form action="list.php" method="POST"> -->
                    <?php
                    // $searchTask = $_SESSION['searchTask'];
                    if(!isset($_SESSION['searchTaskArray'])){
                    echo'
                        <div class="mid1">
                            <svg class="plus-small" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M10,10l0,6.5c-0.003,0.053 -0.008,0.103 -0.024,0.155c-0.038,0.116 -0.12,0.217 -0.226,0.278c-0.047,0.027 -0.094,0.042 -0.146,0.056c-0.052,0.008 -0.051,0.008 -0.104,0.011c-0.053,-0.003 -0.103,-0.008 -0.155,-0.024c-0.15,-0.05 -0.271,-0.171 -0.321,-0.321c-0.016,-0.052 -0.021,-0.102 -0.024,-0.155l0,-6.5l-6.5,0c-0.046,-0.002 -0.058,-0.001 -0.104,-0.011c-0.103,-0.022 -0.197,-0.076 -0.268,-0.154c-0.169,-0.188 -0.169,-0.482 0,-0.67c0.035,-0.038 0.077,-0.072 0.122,-0.098c0.078,-0.045 0.161,-0.062 0.25,-0.067l6.5,0l0,-6.5c0.005,-0.089 0.022,-0.172 0.067,-0.25c0.126,-0.219 0.406,-0.31 0.636,-0.207c0.048,0.022 0.093,0.05 0.132,0.085c0.078,0.071 0.132,0.165 0.154,0.268c0.01,0.046 0.009,0.058 0.011,0.104l0,6.5l6.5,0c0.046,0.002 0.058,0.001 0.104,0.011c0.103,0.022 0.197,0.076 0.268,0.154c0.169,0.188 0.169,0.482 0,0.67c-0.035,0.038 -0.077,0.072 -0.122,0.098c-0.078,0.045 -0.161,0.062 -0.25,0.067l-6.5,0Z"></path> </g> </svg>
                            <span class="text1">
                                <input type="text" placeholder="Add a to-do.." maxlength="255" name="createTask">
                                <span class="creatTaskByListId" style="display: none"></span>
                            </span>
                        </div>';}
                    ?>
                    <!-- </form> -->
                    <div class="mid1-1">
                        <!-- <div class="mid2">
                            <span class="mid2-1">
                                <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                            </span>
                            <span class="mid2-2">sadasf</span>
                            <span class="mid2-3">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                            </span>
                        </div>
                        <div class="mid2">
                            <span class="mid2-1">
                                <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                            </span>
                            <span class="mid2-2">sadasf</span>
                            <span class="mid2-3">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                            </span>
                        </div>
                        <div class="mid2">
                            <span class="mid2-1">
                                <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                            </span>
                            <span class="mid2-2">sadasf</span>
                            <span class="mid2-3">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                            </span>
                        </div>
                        <div class="mid2">
                            <span class="mid2-1">
                                <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                            </span>
                            <span class="mid2-2">sadasf</span>
                            <span class="mid2-3">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                            </span>
                        </div> -->
                        <ul class="task hidden" > <!-- có hidden-->
                            <?php
                            
                            //    $listId = $_SESSION['tb_list.id'];
                            //    $name = $_POST['name'];
                            //    $sql = "SELECT * from tb_task 
                            //            where tb_task.listId = $listId
                            //     ";
                            //     $stmt = $db->prepare($sql);
                            //     $stmt->execute(array($sql));
                            //     $data = $stmt->fetch(PDO::FETCH_ASSOC);
                            //     foreach($db->query($sql) as $task){
                                echo '
                                <div class="mid2">
                                <span class="mid2-1">
                                    <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                                    <svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                                </span> 
                                <span class="mid2-2"></span>
                                <span class="mid2-3">
                                    <svg class="star-wrapper hidden" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                    <svg class="starred-wrapper hidden" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>
                                </span>
                             </div>';
                            //     }
                            
                            ?>
                            <!-- <div class="mid2">
                                <span class="mid2-1">
                                    <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                                    <svg class="task-checked hidden" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                                </span> 
                                <span class="mid2-2"></span>
                                <span class="mid2-3">
                                    <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                </span>
                            </div> -->
                        </ul>
                        <ul class="task body1">
                        <!-- <form action="taskRight.php" method="POST"> -->
                        <?php
                        // require('showTask.php');
                        $listId = $_POST['listId'];
                            // include('createTask.php');
                            // error_reporting(0);
                            // $data=$_SESSION['searchTaskArray'];
                            // unset($data);
                            //print_r($data);
                            // $data=$_SESSION['searchTaskArray'];
                            // // print_r($data);
                            // unset($data);
                            // print_r($data);
                        //<
                            // $searchTask = $_SESSION['searchTask'];
                            // $listId = $_POST['listId'];
                            // // $listId = $_POST['list_id'];
                            // print_r($listId);
                            // // $nameTask = $_POST['createTask'];
                            // $sql = "SELECT * from tb_task 
                            //         where tb_task.listId = $listId
                            //  ";
                            //  $stmt = $db->prepare($sql);
                            //  $stmt->execute(array($sql));
                            //  $data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
                             //>
                            //  $data=$_SESSION['searchTaskArray'];
                            //  unset($data);
                            // $_SESSION['searchTask1']=$data1;
                            // print_r($data1);
                            // if(!isset($searchTask)){
                               // unset($data);
                            //    <a href="xulyChuyenTask.php?list_id='.$listId.'&&status=1&&task_id='.$task['id'].'"> 
                            if(!isset($_SESSION['searchTaskArray'])){
                            foreach($dataTask as $task){
                             if($listId == $task['listId'] && $task['status'] == 0){
                                // $date =$task['createDateRemind'];
                                // $time = strtotime($date);
                                // $t = date('d-m-Y',$time);

                                //Dòng 800 
                                //
                                print_r (
                            '
                             <div class="mid2">
                             <span class="mid2-1">
                                
                                    <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                               
                                    <svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                                
                            </span> 
                            <div class="mid2-2">
                            
                                
                                    <input type="text" name="nameTask" value="'.$task['name'].'" style="color: #262626;">
                                    <span style="display: none">'.$task['id'].'</span>
                                
                             
                            
                             </div>
                             <div class="taskItem-duedate">
                                <span></span>
                             </div>
                             <span class="mid2-3">
                                 <svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                 <svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>
                             </span>
                            </div>
                         
                         ');
                                // $taskId = $_GET['task_id'];
                                // $_SESSION['tb_task.id']=$taskId;
                                // $_SESSION['tb_list.name']=$data['name'];
                                // $taskId = $_GET['task_id'];
                                // $_SESSION['tb_task.id']=$taskId;
                                // print_r($taskId);
                             }
                            $taskId = $_GET['task_id'];
                            $_SESSION['tb_task.id']=$taskId;
                            $task_check = $_GET['status'];
                          
                            // unset($searchTask);
                            //  print_r($taskId);
                             }
                            }
                         
                         ?>
                         <!-- </form> -->
                        </ul>
                        <?php
                        $searchTask = $_SESSION['searchTaskArray'];
                        // unset($searchTask);
                        // print_r($searchTask);
                        if(!isset($searchTask)){
                        echo'<div class="mid3">
                            <text>Show completed to-dos</text>
                        </div>';}
                        ?>
                        <!-- <div class="mid3">
                            <text>Show completed to-dos</text>
                        </div> -->
                        
                        <!-- <div class="mid4"> -->
                        <ul class="task done">
                            <!-- <div class="mid2">
                                <span class="mid2-1">
                                    <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                                </span>
                                <span class="mid2-2" style="text-decoration: line-through">sadasd</span>
                                <span class="mid2-3">
                                    <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                </span>
                            </div> -->
                            <?php
                            // require('list.php');
                            // error_reporting(0);
                            //<

                            // $listId = $_POST['listId'];
                            // $searchTask = $_SESSION['searchTask'];
                            // // $nameTask = $_POST['createTask'];
                            // $sql = "SELECT * from tb_task 
                            //         where tb_task.listId = $listId
                            //  ";
                            //  $stmt = $db->prepare($sql);
                            //  $stmt->execute(array($sql));
                            //  $data = $stmt->fetch(PDO::FETCH_ASSOC);

                             //>
                            //  if(!isset($searchTask)){
                                // <a href="index.php?list_id='.$listId.'&&task_id='.$task['id'].'" class="translateRight">
                            if(!isset($_SESSION['searchTaskArray'])){
                                foreach($dataTask as $task){
                             if($listId == $task['listId'] && $task['status'] == 1){
                                print_r (
                            '
                             <div class="mid2">
                             <span class="mid2-1">
                                    <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                              
                                    <svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                               
                            </span> 
                            <div class="mid2-2">
                            
                            
                                <input type="text" name="nameTask" value="'.$task['name'].'" style="color: #262626;">
                    
                             </a>
                             </div>
                             <span class="mid2-3">
                                 <svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                 <svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>
                             </span>
                            </div>
                         
                         ');
                                // $taskId = $_GET['task_id'];
                                // $_SESSION['tb_task.id']=$taskId;
                                // $_SESSION['tb_list.name']=$data['name'];
                                // $taskId = $_GET['task_id'];
                                // $_SESSION['tb_task.id']=$taskId;
                                // print_r($taskId);
                             }
                             $taskId = $_GET['task_id'];
                             $_SESSION['tb_task.id']=$taskId;
                             $task_check = $_GET['status'];
                             $listId = $_GET['list_id'];
                             $_SESSION['tb_list.id']=$listId; 
                             $searchTask = $_SESSION['searchTaskArray'];
                            //  unset($searchTask);
                             }
                            }
                         ?>
                        </ul>
                        <!-- </div> -->
                    </div> 
                </div>
                <!-- <div class="result-search"> -->
                <?php
                echo '<div class="mid-mid1">';
                    //  $searchTask = $_GET['search'];
                    //  $sql= "SELECT * FROM tb_task WHERE name LIKE '%$searchTask%'";
                    // //  print_r($sql);
                    //  $stmt = $db->prepare($sql);
                    //  $stmt->execute(array($sql));
                    //  $data = $stmt->fetchAll();
                    //  $_SESSION['searchTask']=$sql;
                    //  echo $_SESSION['searchTask'];
                    
                    //  foreach ($db->query($sql) as $task) {
                    //      # code...
                    //      if(isset($_SESSION['searchTask'])){
                        // $rowTask = $_SESSION['rowTask'];
                        // print_r($rowTask);
                        $dataTask1 = $_SESSION['tasks'];
                        unset($dataTask1);
                        $searchTask = $_SESSION['searchTask'];
                        $data2=$_SESSION['searchTaskArray'];
                        // echo $data2;
                        if(isset($_SESSION['searchTaskArray'])){
                        foreach($data2 as $list){
                            // print_r($list['id']);
                            // print_r($list['listId']);
                            $l1= $list['listId'];
                            $sql = "SELECT * FROM tb_list where id=$l1";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            // print_r($sql);
                            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            // print_r($dataList);
                            // $_SESSION['listId1']=$dataList;
                            // print_r($_SESSION['listId1']);
                            // $rowTask = $stmt->rowCount();
                            // print_r($dataList); 
                            foreach($dataList as $listName){

                            //   print_r($listName);
                            echo'<div class="mid3">
                                    <text>'.$listName['name'].'</text>
                                </div>';
                            }
                        // print_r($data);
                        // if(isset($_SESSION['searchTaskArray'])){
                            $sql1 = "SELECT * FROM tb_task where name LIKE '%$searchTask%' AND listId=$l1";
                            $stmt1 = $db->prepare($sql1);
                            $stmt1->execute();
                            // print_r($sql1);
                            $dataTask = $stmt1->fetchAll(PDO::FETCH_ASSOC);
                            $rowTask = $stmt1->rowCount();
                            // print_r($rowTask);
                            // $taskId = $_SESSION["tb_task.id"];
                            foreach($db->query($sql1) as $task){
                                // $l2= $task['listId'];
                                //     print_r($l2);
                                    // $_SESSION["tb_list.id"]=$listId;
                                   
                                if($rowTask > 0 && $searchTask !=""){
                                    // $l2 = $task['id'];
                                    // print_r($l2);
                                    // $_SESSION["tb_list.id"]=$listId;
                                    // $sql1 = "SELECT * FROM tb_task where listId=$task and name LIKE '%$searchTask%'";
                                    // $stmt1 = $db->prepare($sql);
                                    // $stmt1->execute();
                                    // print_r($sql1);
                                    // $dataTask = $stmt1->fetchAll(PDO::FETCH_ASSOC);
                                    // $taskId = $_SESSION["tb_task.id"];
                                echo '
                                <div class="result-search">
                                    <div class="mid2">
                                    <span class="mid2-1">
                                        <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                                        <svg class="task-checked" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                                    </span> 
                                    <span class="mid2-2">'.$task['name'].'</span>
                                    <span class="mid2-3">
                                        <svg class="star-wrapper" id="change" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                                        <svg class="starred-wrapper" id="change1" width="22px" height="44px" viewBox="0 0 22 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,40.5c0,0.28 0.22,0.42 0.48,0.32l10.04,-3.64c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.64c0.28,0.1 0.48,-0.04 0.48,-0.32l0,-40.5l-22,0ZM14.46,24.08l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.1 -0.28,0.1c-0.08,0 -0.18,-0.04 -0.24,-0.1c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.12 -0.22,-0.32 -0.16,-0.52c0.08,-0.18 0.24,-0.32 0.44,-0.32l5.52,0l1.68,-5.24c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.24l5.5,0c0.2,0 0.36,0.14 0.44,0.32c0.06,0.2 -0.02,0.4 -0.16,0.52l-4.46,3.24Z"></path> </g> </svg>
                                    </span>
                                </div>
                                </div>';
                                }
                               else if($searchTask =""){
                                    echo '
                                        <div type="margin: 0 25%;background: rgba(0,0,0,0.25);">
                                            <svg class="search rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g> <path d="M8.5025,15 C4.9225,15 2.0025,12.08 2.0025,8.5 C2.0025,4.92 4.9225,2 8.5025,2 C12.0825,2 15.0025,4.92 15.0025,8.5 C15.0025,12.08 12.0825,15 8.5025,15 L8.5025,15 Z M8.5025,3 C5.4625,3 3.0025,5.46 3.0025,8.5 C3.0025,11.54 5.4625,14 8.5025,14 C11.5425,14 14.0025,11.54 14.0025,8.5 C14.0025,5.46 11.5425,3 8.5025,3 L8.5025,3 Z M17.5025,18 C17.3825,18 17.2425,17.96 17.1425,17.86 L13.6425,14.36 C13.4625,14.16 13.4625,13.84 13.6425,13.64 C13.8425,13.46 14.1625,13.46 14.3625,13.64 L17.8625,17.14 C18.0425,17.34 18.0425,17.66 17.8625,17.86 C17.7625,17.96 17.6225,18 17.5025,18 L17.5025,18 Z" id="z"></path> </g> </g> </svg>
                                        </div>
                                        <h2>No Search Results</h2>
                                    ';
                                }
                     }
                     }
                        }
                    echo '</div>';
                    ?>
                <!-- </div> -->
            </div> 
            <div class="main-right"> 
                <!-- // $taskId = $_SESSION["tb_task.id"];
                // // $_SESSION['tb_task.id']=$taskId;
                // print_r($taskId);
                // $sql = "SELECT tb_subtask.* from tb_subtask where tb_subtask.listId=$taskId";
                // $stmt = $db->prepare($sql);
                // $subtask = $db->query($sql);
                // $stmt->execute(array($sql));
                // $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                // $data = $stmt->fetchAll();
                // print_r($sql);
                // // print_r($subtask['id']);
                // // $subtask = $db->query($sql);
                // // print_r($subtask['id']);
                // if($data == $subtask['id']){
                // # code...
            
                // if($taskId == $subtask['taskId']){ -->
                    <div class="right-header">
                    <div class="right-header1">
                            <svg class="detail-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-3.271,0 -9.729,0 -13,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,3.271 0,9.729 0,13c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c3.271,0 9.729,0 13,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-3.271 0,-9.729 0,-13Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                    </div>
                    <div class="right-header2">
                            <div class="right-header21">
                          
                                <div class="display-view">
                                    
                                    <span class="nameTaskEdit"></span>
                                        
                                            <input type="text" value="" name="editTaskName" class="edit-view-task" style="color: #262626">
                                            <span class="editTaskId"></span>
                                       
                                    
                                </div>
                                
                            
                            </div>
                    </div>
                    <div class="right-header3">
                        <svg class="star-wrapper" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M3.74,18 C3.64,18 3.54,17.96 3.46,17.9 C3.28,17.76 3.2,17.54 3.28,17.34 L5.16,11.5 L0.2,7.9 C0.04,7.78 -0.04,7.56 0.02,7.34 C0.1,7.14 0.28,7 0.5,7 L6.64,7 L8.52,1.16 C8.66,0.76 9.34,0.76 9.48,1.16 L11.38,7 L17.5,7 C17.72,7 17.9,7.14 17.98,7.34 C18.04,7.56 17.96,7.78 17.8,7.9 L12.84,11.5 L14.72,17.34 C14.8,17.54 14.72,17.76 14.54,17.9 C14.38,18.02 14.14,18.02 13.96,17.9 L9,14.3 L4.04,17.9 C3.96,17.96 3.84,18 3.74,18 L3.74,18 Z M9,13.18 C9.1,13.18 9.2,13.2 9.3,13.28 L13.3,16.18 L11.78,11.46 C11.7,11.26 11.78,11.04 11.96,10.92 L15.96,8 L11,8 C10.8,8 10.6,7.86 10.54,7.66 L9,2.94 L7.46,7.66 C7.4,7.86 7.22,8 7,8 L2.04,8 L6.04,10.92 C6.22,11.04 6.3,11.26 6.22,11.46 L4.7,16.18 L8.7,13.28 C8.8,13.2 8.9,13.18 9,13.18 L9,13.18 Z"></path> </g> </svg>
                        <svg class="starred-wrapper" width="100%" height="100%" viewBox="0 0 22 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M0,0l0,48.48c0,0.28 0.22,0.42 0.48,0.34l10.04,-3.66c0.28,-0.1 0.7,-0.1 0.96,0l10.04,3.66c0.28,0.08 0.48,-0.06 0.48,-0.34l0,-48.48l-22,0ZM14.56,30.06l1.68,5.26c0.08,0.18 0,0.38 -0.16,0.5c-0.14,0.1 -0.36,0.1 -0.52,0l-4.46,-3.24l-4.46,3.24c-0.08,0.06 -0.18,0.08 -0.28,0.08c-0.08,0 -0.18,-0.02 -0.24,-0.08c-0.16,-0.12 -0.24,-0.32 -0.16,-0.5l1.68,-5.26l-4.46,-3.24c-0.14,-0.1 -0.22,-0.32 -0.16,-0.52c0.06,-0.16 0.24,-0.3 0.42,-0.3l5.54,0l1.68,-5.26c0.14,-0.36 0.74,-0.36 0.88,0l1.7,5.26l5.5,0c0.2,0 0.36,0.14 0.44,0.3c0.06,0.2 -0.02,0.42 -0.16,0.52l-4.46,3.24Z"> </path></g> </svg>
                    </div>
                    </div>
                    <div class="right-mid" id="scroll-1">
                        <div class="right-mid1">
                            <div class="right-mid12">
                                <svg class="date" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="date"> <path d="M2.5,7 C2.22,7 2,6.78 2,6.5 L2,3.5 C2,2.68 2.68,2 3.5,2 L16.5,2 C17.32,2 18,2.68 18,3.5 L18,6.5 C18,6.78 17.78,7 17.5,7 L2.5,7 Z M3,6 L17,6 L17,3.5 C17,3.22 16.78,3 16.5,3 L3.5,3 C3.22,3 3,3.22 3,3.5 L3,6 Z M3.5,18 C2.68,18 2,17.32 2,16.5 L2,8.5 C2,8.22 2.22,8 2.5,8 C2.78,8 3,8.22 3,8.5 L3,16.5 C3,16.78 3.22,17 3.5,17 L16.5,17 C16.78,17 17,16.78 17,16.5 L17,8.5 C17,8.22 17.22,8 17.5,8 C17.78,8 18,8.22 18,8.5 L18,16.5 C18,17.32 17.32,18 16.5,18 L3.5,18 Z M8.5,12 C7.68,12 7,11.32 7,10.5 L7,9.5 C7,8.68 7.68,8 8.5,8 C9.32,8 10,8.68 10,9.5 L10,10.5 C10,11.32 9.32,12 8.5,12 L8.5,12 Z M5.5,11 C5.22,11 5,10.78 5,10.5 L5,9.5 C5,9.22 5.22,9 5.5,9 C5.78,9 6,9.22 6,9.5 L6,10.5 C6,10.78 5.78,11 5.5,11 L5.5,11 Z M8.5,9 C8.22,9 8,9.22 8,9.5 L8,10.5 C8,10.78 8.22,11 8.5,11 C8.78,11 9,10.78 9,10.5 L9,9.5 C9,9.22 8.78,9 8.5,9 L8.5,9 Z M11.5,11 C11.22,11 11,10.78 11,10.5 L11,9.5 C11,9.22 11.22,9 11.5,9 C11.78,9 12,9.22 12,9.5 L12,10.5 C12,10.78 11.78,11 11.5,11 L11.5,11 Z M14.5,11 C14.22,11 14,10.78 14,10.5 L14,9.5 C14,9.22 14.22,9 14.5,9 C14.78,9 15,9.22 15,9.5 L15,10.5 C15,10.78 14.78,11 14.5,11 L14.5,11 Z M5.5,15 C5.22,15 5,14.78 5,14.5 L5,13.5 C5,13.22 5.22,13 5.5,13 C5.78,13 6,13.22 6,13.5 L6,14.5 C6,14.78 5.78,15 5.5,15 L5.5,15 Z M8.5,15 C8.22,15 8,14.78 8,14.5 L8,13.5 C8,13.22 8.22,13 8.5,13 C8.78,13 9,13.22 9,13.5 L9,14.5 C9,14.78 8.78,15 8.5,15 L8.5,15 Z M11.5,15 C11.22,15 11,14.78 11,14.5 L11,13.5 C11,13.22 11.22,13 11.5,13 C11.78,13 12,13.22 12,13.5 L12,14.5 C12,14.78 11.78,15 11.5,15 L11.5,15 Z M14.5,15 C14.22,15 14,14.78 14,14.5 L14,13.5 C14,13.22 14.22,13 14.5,13 C14.78,13 15,13.22 15,13.5 L15,14.5 C15,14.78 14.78,15 14.5,15 L14.5,15 Z"></path> </g> </g> </svg>
                            </div>
                            <div class="text-right-mid">
                            <?php
                                $taskId = $_SESSION['tb_task.id'];
                                $sql = "SELECT * from tb_task where id=$taskId";
                                $stmt= $db->prepare($sql);
                                $stmt->execute(array($sql));
                                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                                foreach($db->query($sql) as $task) {
                                    if($taskId==$task['id']){
                                    $date = $task['createDateRemind'];
                                    // $time = strtotime($date);

                                    // $newformat = date('Y-m-d',$time);
                                    $d = new DateTime($date);
                                    
                                    $timestamp = $d->getTimestamp(); // Unix timestamp
                                    $formatted_date = $d->format('Y-m-d');
                                //    echo var_dump($formatted_date);
                                   echo $formatted_date;
                                    # code...    ;
                                echo'
                                    <input type="date" name="UpdateTimeTask" value="'. $formatted_date.'" method="POST">
                                    <input class="createDateRemind" type="submit" name="12345">
                                ';
                                    }
                                  
                                }
                            ?>  
                            </div>
                            <div class="right-mid13">
                                <svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <!-- <div class="editDateTask hidden"> -->
                        <!-- </div> -->
                        <div class="right-mid2">
                            <div class="right-mid12">
                                <svg class="reminder" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="reminder"> <path d="M3.26,6.6 C3.1,6.24 3,5.88 3,5.5 C3,4.12 4.12,3 5.5,3 C6.04,3 6.54,3.18 6.98,3.5 C7.2,3.66 7.52,3.62 7.68,3.4 C7.86,3.18 7.8,2.86 7.58,2.7 C6.98,2.24 6.24,2 5.5,2 C3.58,2 2,3.58 2,5.5 C2,6.02 2.12,6.54 2.38,7.04 C2.46,7.22 2.64,7.32 2.82,7.32 C2.9,7.32 2.98,7.3 3.04,7.28 C3.3,7.14 3.4,6.84 3.26,6.6 L3.26,6.6 Z M14.5,2 C13.76,2 13.04,2.24 12.42,2.7 C12.2,2.86 12.16,3.18 12.32,3.4 C12.48,3.62 12.8,3.66 13.02,3.5 C13.46,3.18 13.98,3 14.5,3 C15.88,3 17,4.12 17,5.5 C17,5.88 16.92,6.24 16.74,6.6 C16.62,6.84 16.72,7.14 16.96,7.28 C17.04,7.3 17.1,7.32 17.18,7.32 C17.36,7.32 17.54,7.22 17.64,7.04 C17.88,6.54 18,6.02 18,5.5 C18,3.58 16.44,2 14.5,2 L14.5,2 Z M17,11 C17,7.14 13.86,4 10,4 C6.14,4 3,7.14 3,11 C3,13 3.84,14.82 5.2,16.1 L4.14,17.14 C3.96,17.34 3.96,17.66 4.14,17.86 C4.24,17.96 4.38,18 4.5,18 C4.62,18 4.76,17.96 4.86,17.86 L5.98,16.72 C7.12,17.52 8.5,18 10,18 C11.5,18 12.88,17.52 14.02,16.72 L15.14,17.86 C15.24,17.96 15.38,18 15.5,18 C15.62,18 15.76,17.96 15.86,17.86 C16.04,17.66 16.04,17.34 15.86,17.14 L14.8,16.1 C16.16,14.82 17,13 17,11 L17,11 Z M4,11 C4,7.7 6.7,5 10,5 C13.3,5 16,7.7 16,11 C16,14.3 13.3,17 10,17 C6.7,17 4,14.3 4,11 L4,11 Z M10.5,7 C10.22,7 10,7.22 10,7.5 L10,11 L7.46,11 C7.2,11 6.96,11.22 6.96,11.5 C6.96,11.78 7.2,12 7.46,12 L10.5,12 C10.78,12 11,11.78 11,11.5 L11,7.5 C11,7.22 10.78,7 10.5,7 L10.5,7 Z" id="…"></path> </g> </g> </svg>
                            </div>
                            <div class="text-right-mid">
                            <?php
                                
                                 $taskId = $_SESSION['tb_task.id'];
                                 $sql = "SELECT * from tb_task where id=$taskId";
                                 $stmt= $db->prepare($sql);
                                 $stmt->execute(array($sql));
                                 $data = $stmt->fetch(PDO::FETCH_ASSOC);
                                 foreach($db->query($sql) as $task) {
                                    $date1 = $task['createDateRemind'];
                                    // $time = strtotime($date1);
                                    // $d1 = new DateTime($date1);
                                    // $formatted_date1 = date_format($d1,'Y-m-d A i:h');
                                    // $dtFormat = "Y-m-d H:i:s"; //MySQL Datetime format
                                    $curDT = date($date1);
                                    // $curTime = strtotime($curDT);
                                    $d = new DateTime($date1);
                                    // echo $curDT;
                                    $timestamp = strtotime($curDT);
                                    
                                    $t = $d->format('Y-m-d\TH:i');
                                    // echo $t;
                                    // $nowFormat = "Y-m-d h:i ";
                                    $arrEn = array('am', 'pm');
                                    $arrAr = array('SA', 'CH');
                                    $formatted_date1 = $t.str_replace($arrEn, $arrAr,date("a", $timestamp));
                                    // $t = $d->getTimestamp();
                                    // $t1 = $d->format('Y-m-d h:i a');
                                    // echo $t1;
                                    //  echo date($t);
                                //    echo $formatted_date1;
                                //    echo var_dump($formatted_date1);
                                    // $sdf = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ss");
                                    // $output = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
                                    // $Date = $sdf.strtotime($date1);
                                    // $formattedTime = $output.format($Date);
                                    //  $newformat = date('Y-m-d',$time);
                                echo'
                                    <input type="datetime-local" name="createRemindTime" value="'.$t.'">
                                    <input type="submit" name="submitRemind">
                               ';
                            }

                            ?>
                            </div>
                            <div class="right-mid13">
                                <svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>
                            </div>
                        </div>
                        <div class="right-mid3">
                            <div class="subTask">
                                <?php
                                $taskId = $_SESSION["tb_task.id"];
                                // $_SESSION['tb_task.id']=$taskId;
                                print_r($taskId);
                                // $taskname = $_SESSION["taskName"];
                                $sql = "SELECT tb_subtask.* from tb_subtask where tb_subtask.taskId=$taskId";
                                $stmt = $db->prepare($sql);
                                $stmt->execute(array($sql));
                                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                                foreach($db->query($sql) as $subtask){
                                print_r('<li class="flex">
                                    <div class="section-icon-1">
                                        <a>
                                            <svg class="task-check" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M17.5,4.5c0,-0.53 -0.211,-1.039 -0.586,-1.414c-0.375,-0.375 -0.884,-0.586 -1.414,-0.586c-2.871,0 -8.129,0 -11,0c-0.53,0 -1.039,0.211 -1.414,0.586c-0.375,0.375 -0.586,0.884 -0.586,1.414c0,2.871 0,8.129 0,11c0,0.53 0.211,1.039 0.586,1.414c0.375,0.375 0.884,0.586 1.414,0.586c2.871,0 8.129,0 11,0c0.53,0 1.039,-0.211 1.414,-0.586c0.375,-0.375 0.586,-0.884 0.586,-1.414c0,-2.871 0,-8.129 0,-11Z" style="fill:none;stroke-width:1px"></path> </g> </svg>
                                            <svg class="task-checked hidden" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"> <g> <path d="M9.5,14c-0.132,0 -0.259,-0.052 -0.354,-0.146c-1.485,-1.486 -3.134,-2.808 -4.904,-3.932c-0.232,-0.148 -0.302,-0.457 -0.153,-0.691c0.147,-0.231 0.456,-0.299 0.69,-0.153c1.652,1.049 3.202,2.266 4.618,3.621c2.964,-4.9 5.989,-8.792 9.749,-12.553c0.196,-0.195 0.512,-0.195 0.708,0c0.195,0.196 0.195,0.512 0,0.708c-3.838,3.837 -6.899,7.817 -9.924,12.902c-0.079,0.133 -0.215,0.221 -0.368,0.24c-0.021,0.003 -0.041,0.004 -0.062,0.004"></path> <path d="M15.5,18l-11,0c-1.379,0 -2.5,-1.121 -2.5,-2.5l0,-11c0,-1.379 1.121,-2.5 2.5,-2.5l10,0c0.276,0 0.5,0.224 0.5,0.5c0,0.276 -0.224,0.5 -0.5,0.5l-10,0c-0.827,0 -1.5,0.673 -1.5,1.5l0,11c0,0.827 0.673,1.5 1.5,1.5l11,0c0.827,0 1.5,-0.673 1.5,-1.5l0,-9.5c0,-0.276 0.224,-0.5 0.5,-0.5c0.276,0 0.5,0.224 0.5,0.5l0,9.5c0,1.379 -1.121,2.5 -2.5,2.5"></path> </g> </svg>
                                        </a>
                                    </div>
                                    <div class="section-content top">
                                    
                                      
                                            <input type="text" class="edit-view-subtask" style="color:#262626; background: #FAFAFA" value="'.$subtask['name'].'" name="editSubTask">
                                        
                                    </div>
                                    <div class="section-delete deleteSubtask">
                                        <svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>
                                    </div>
                                    <span class="idSubTask" style="display:none">'.$subtask['id'].'</span>
                                </li>');
                                    $editSubtask = $subtask['name'];
                                    $_SESSION['editSubtask']= $editSubtask;
                                    $idSubtask = $subtask['id'];
                                    $_SESSION['tb_subtask.id'] = $idSubtask;
                                }
                                ?>
                            </div>
                            <div class="createSubTask">
                                <div class="right-mid12">
                                    <svg class="plus-small" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <g> <path d="M10,10l0,6.5c-0.003,0.053 -0.008,0.103 -0.024,0.155c-0.038,0.116 -0.12,0.217 -0.226,0.278c-0.047,0.027 -0.094,0.042 -0.146,0.056c-0.052,0.008 -0.051,0.008 -0.104,0.011c-0.053,-0.003 -0.103,-0.008 -0.155,-0.024c-0.15,-0.05 -0.271,-0.171 -0.321,-0.321c-0.016,-0.052 -0.021,-0.102 -0.024,-0.155l0,-6.5l-6.5,0c-0.046,-0.002 -0.058,-0.001 -0.104,-0.011c-0.103,-0.022 -0.197,-0.076 -0.268,-0.154c-0.169,-0.188 -0.169,-0.482 0,-0.67c0.035,-0.038 0.077,-0.072 0.122,-0.098c0.078,-0.045 0.161,-0.062 0.25,-0.067l6.5,0l0,-6.5c0.005,-0.089 0.022,-0.172 0.067,-0.25c0.126,-0.219 0.406,-0.31 0.636,-0.207c0.048,0.022 0.093,0.05 0.132,0.085c0.078,0.071 0.132,0.165 0.154,0.268c0.01,0.046 0.009,0.058 0.011,0.104l0,6.5l6.5,0c0.046,0.002 0.058,0.001 0.104,0.011c0.103,0.022 0.197,0.076 0.268,0.154c0.169,0.188 0.169,0.482 0,0.67c-0.035,0.038 -0.077,0.072 -0.122,0.098c-0.078,0.045 -0.161,0.062 -0.25,0.067l-6.5,0Z"></path> </g> </svg>
                                </div>
                                <div class="text-right-mid1">
                                    <!-- <form action="taskRight.php" method="POST"> -->
                                    <input type="text" placeholder="Add a subtask" name="subtask" value="">
                                    <!-- </form>  -->
                                </div>
                            </div>
                        </div>
                        <div class="right-mid4">
                            <div class="right-mid12">
                                <svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>
                            </div>
                            <div class="text-right-mid1">
                                <input type="text" placeholder="Add a note...">
                            </div>
                            <div class="right-mid14">
                                <svg class="fullscreen" width="20px" height="20px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <g> <path d="M12.5,10c-0.276,0-0.5,0.224-0.5,0.5v3c0,0.275-0.225,0.5-0.5,0.5h-6C5.224,14,5,13.775,5,13.5v-6 C5,7.224,5.224,7,5.5,7h3C8.776,7,9,6.776,9,6.5S8.776,6,8.5,6h-3C4.673,6,4,6.673,4,7.5v6C4,14.327,4.673,15,5.5,15h6 c0.827,0,1.5-0.673,1.5-1.5v-3C13,10.224,12.776,10,12.5,10z"></path> <path d="M14.962,4.309c-0.051-0.122-0.148-0.22-0.271-0.271C14.63,4.013,14.565,4,14.5,4h-4 C10.224,4,10,4.224,10,4.5S10.224,5,10.5,5h2.793l-5.146,5.146c-0.195,0.195-0.195,0.512,0,0.707C8.244,10.951,8.372,11,8.5,11 s0.256-0.049,0.354-0.146L14,5.707V8.5C14,8.776,14.224,9,14.5,9S15,8.776,15,8.5v-4C15,4.435,14.987,4.37,14.962,4.309z"></path> </g> </svg>
                            </div>
                        </div>
                        <div class="right-mid5">
                            <div class="right-mid12" style="flex-grow: 1">
                                <div class="handleFile">
                                    <form action="XuLyFile/handleFile.php" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="loadFile" id="upLoadFile">
                                        <input type="submit" name="submit" value="Tải File">
                                        <!-- <svg class="clip" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <g> <path id="XMLID_2_" d="M7,17c-1.335,0-2.591-0.521-3.536-1.465S2,13.336,2,12c0-1.335,0.52-2.591,1.464-3.536l5.312-5.312 c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L4.171,9.171C3.416,9.927,3,10.932,3,12s0.416,2.073,1.171,2.828 c1.511,1.512,4.146,1.512,5.657,0l6.441-6.441c0.473-0.472,0.732-1.1,0.732-1.768c0-0.668-0.26-1.296-0.732-1.768 c-0.945-0.945-2.592-0.943-3.535,0l-6.441,6.441c-0.39,0.39-0.39,1.024,0,1.414c0.378,0.377,1.036,0.377,1.414,0l4.562-4.562 c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707l-4.562,4.562c-0.755,0.756-2.073,0.756-2.828,0 c-0.78-0.779-0.78-2.049,0-2.828l6.441-6.441c1.32-1.321,3.627-1.323,4.949,0c0.661,0.661,1.025,1.54,1.025,2.475 s-0.364,1.814-1.025,2.475l-6.441,6.441C9.591,16.479,8.335,17,7,17z"></path> </g> </svg> -->
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="text-right-mid">
                                <text>Add a file</text>
                            </div> -->
                            <div class="right-mid14">
                                <svg class="speech" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="speech"> <path d="M10,13 C11.92,13 13.5,11.42 13.5,9.5 L13.5,5.5 C13.5,3.58 11.92,2 10,2 C8.08,2 6.5,3.58 6.5,5.5 L6.5,9.5 C6.5,11.42 8.08,13 10,13 L10,13 Z M7.5,5.5 C7.5,4.12 8.62,3 10,3 C11.38,3 12.5,4.12 12.5,5.5 L12.5,9.5 C12.5,10.88 11.38,12 10,12 C8.62,12 7.5,10.88 7.5,9.5 L7.5,5.5 Z M15.5,8.5 C15.5,8.22 15.28,8 15,8 C14.72,8 14.5,8.22 14.5,8.5 L14.5,9.5 C14.5,11.98 12.48,14 10,14 C7.52,14 5.5,11.98 5.5,9.5 L5.5,8.5 C5.5,8.22 5.28,8 5,8 C4.72,8 4.5,8.22 4.5,8.5 L4.5,9.5 C4.5,12.36 6.7,14.72 9.5,14.98 L9.5,17 L6,17 C5.72,17 5.5,17.22 5.5,17.5 C5.5,17.78 5.72,18 6,18 L14,18 C14.28,18 14.5,17.78 14.5,17.5 C14.5,17.22 14.28,17 14,17 L10.5,17 L10.5,14.98 C13.3,14.72 15.5,12.36 15.5,9.5 L15.5,8.5 Z" id="O"></path> </g> </g> </svg>
                            </div>
                            <div class="right-mid14">
                                <svg class="dropbox" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <g> <polygon points="6.515,2.227 1.535,5.478 4.979,8.236 10,5.135 "></polygon> <polygon points="1.535,10.994 6.515,14.245 10,11.336 4.979,8.236 "></polygon> <polygon points="10,11.336 13.485,14.245 18.465,10.994 15.021,8.236 "></polygon> <polygon points="18.465,5.478 13.485,2.227 10,5.135 15.021,8.236 "></polygon> <polygon points="10.01,11.962 6.515,14.862 5.02,13.886 5.02,14.981 10.01,17.973 15.001,14.981 15.001,13.886 13.505,14.862"></polygon> </g> </svg>
                            </div>
                        </div>
                            <ul class="comments-list comment hidden">
                                <!-- <li class="section-item section-item-comment">
                                    <div class="section-icon picture">
                                        <span class="user-avatar">
                                            <img src="./image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="asdasd">
                                        </span>
                                    </div>
                                    <div class="section-content">
                                        <span class="comment-author">vumanhtuan12a3</span>
                                        <span class="comment-time">16 minutes ago</span>
                                        <span class="comment-text"></span>
                                    </div>
                                    <a class="section-delete">
                                        <svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>
                                    </a>
                                </li> -->
                            </ul>
                            <ul class="comments-list commented">
                                <?php
                                $taskId = $_SESSION["tb_task.id"];
                                $email1 = $_SESSION['email'];  
                                echo $taskId;
                                $sql = "SELECT tb_comment.* from tb_comment where tb_comment.taskId=$taskId";
                                $stmt = $db->prepare($sql);
                                $stmt->execute(array($sql));
                                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                                foreach($db->query($sql) as $comment){
                                print_r('
                                <li class="section-item section-item-comment">
                                        <div class="section-icon picture">
                                            <span class="user-avatar">
                                                <img src="./image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="asdasd">
                                            </span>
                                        </div>
                                        <div class="section-content">
                                            <span class="comment-author">'.$email1.'</span>
                                            <span class="comment-time">'.$comment['comment-time'].'</span>
                                            <span class="comment-text">'.$comment['title'].'</span>
                                        </div>
                                        <a class="section-delete comment">
                                            <svg class="delete" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="delete"> <path d="M10.72,9.9975 L13.86,6.8575 C14.04,6.6575 14.04,6.3375 13.86,6.1375 C13.66,5.9575 13.34,5.9575 13.14,6.1375 L10,9.2775 L6.86,6.1375 C6.66,5.9575 6.34,5.9575 6.14,6.1375 C5.96,6.3375 5.96,6.6575 6.14,6.8575 L9.28,9.9975 L6.14,13.1375 C5.96,13.3375 5.96,13.6575 6.14,13.8575 C6.24,13.9575 6.38,13.9975 6.5,13.9975 C6.62,13.9975 6.76,13.9575 6.86,13.8575 L10,10.7175 L13.14,13.8575 C13.24,13.9575 13.38,13.9975 13.5,13.9975 C13.62,13.9975 13.76,13.9575 13.86,13.8575 C14.04,13.6575 14.04,13.3375 13.86,13.1375 L10.72,9.9975 Z" id="4"></path> </g> </g> </svg>

                                        </a>
                                        <span class="idComment" style="display: none;">'.$comment['id'].'</span>
                                    </li>');
                                }
                                    ?>
                            </ul>
                        
                    </div>
                    <div class="right-foot">
                        <div class="right-foot1">
                            <div class="right-foot1-1">
                                <div class="right-foot1-12">
                                    <input type="text" placeholder="Add a comment..." name="createComment" value="">
                                </div>
                            </div>
                        </div>
                        <div class="right-foot2">
                            <span class="right-foot21">
                                <svg class="close-right" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="close-right"> <path d="M4.5,18 C3.12,18 2,16.88 2,15.5 L2,4.5 C2,3.12 3.12,2 4.5,2 L15.5,2 C16.88,2 18,3.12 18,4.5 L18,15.5 C18,16.88 16.88,18 15.5,18 L4.5,18 Z M4.5,3 C3.68,3 3,3.68 3,4.5 L3,15.5 C3,16.32 3.68,17 4.5,17 L15.5,17 C16.32,17 17,16.32 17,15.5 L17,4.5 C17,3.68 16.32,3 15.5,3 L4.5,3 Z M7.5,15 C7.38,15 7.24,14.96 7.14,14.86 C6.96,14.66 6.96,14.34 7.14,14.14 L11.3,10 L7.14,5.86 C6.96,5.66 6.96,5.34 7.14,5.14 C7.34,4.96 7.66,4.96 7.86,5.14 L12.36,9.64 C12.54,9.84 12.54,10.16 12.36,10.36 L7.86,14.86 C7.76,14.96 7.62,15 7.5,15 L7.5,15 Z" id="i"></path> </g> </g> </svg>
                            </span>
                            <span class="right-foot22">
                                <text rel="label_created_on_$" data="Fri, August 02">Created on <token class="token_0" title="Fri, August 02">Fri, August 02</token></text>
                            </span>
                            <span class="right-foot21">
                                <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>
                            </span>
                        </div>
                    </div>
            </div>
        </div>
        <div class="body-two">
            <div class="dialog-wrapper">
                <div class="settings account flex">
                    <div class="content">
                        <div class="tabs">
                            <ul class="tabs-ul">
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon genaral"></span>
                                        <span class="general">
                                            <text>General</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon account"></span>
                                        <span class="account">
                                            <text>Account</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon shortcuts"></span>
                                        <span class="shortcuts">
                                            <text>Shortcuts</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon smartlists"></span>
                                        <span class="smartlists">
                                            <text>SmartLists</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon notifications"></span>
                                        <span class="notifications">                                                <text>Notifications</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon about"></span>
                                        <span class="about">
                                            <text>About</text>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="tabs-1" class="scrollbar">
                            <div class="settings-content-inner account">
                                <div class="content-account">
                                    
                                    <div class="separator">
                                        <div class="cols">
                                            <div class="avatar-cols">
                                                <img src="image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="chuv">
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="separator basic-account-settings">
                                        
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Name</text>
                                            </div>
                                            <div class="cols-input">
                                                <input type="text" placeholder="vumanhtuan12a3">
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Email</text>
                                            </div>
                                            <div class="cols-input-1">
                                                <input type="text" placeholder="vumanhtuan12a3@gmail.com">
                                            </div>
                                            <div class="cols-input-2">
                                                <button>
                                                    <text>Change Email</text>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text"></div>
                                            <div class="cols-input">
                                                <p class="cols-input-p">
                                                    <a href="#">
                                                        <text>Add or manage your email addresses</text>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Password</text>
                                            </div>
                                            <div class="cols-input-3">
                                                <input type="password" placeholder="Current Password">
                                                <button>
                                                    <text>Change Password...</text>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tabs-1" id="scroll-1">
                            <div class="settings-content-inner general">
                                <div class="content-general">
                                    <div class="separator basic-general-settings">
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Language</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-language">
                                                        <option value="1">‏العربية‏</option>
                                                        <option value="1">Български</option>
                                                        <option value="1">Català</option>
                                                        <option value="1">Čeština</option>
                                                        <option value="1">Cymraeg</option>
                                                        <option value="1">Dansk</option>
                                                        <option value="1">Deutsch</option>
                                                        <option value="1">Ελληνικά</option>
                                                        <option value="1">English</option>
                                                        <option value="1">Español</option>
                                                        <option value="1">‏فارسی‏</option>
                                                        <option value="1">Français</option>
                                                        <option value="1">‏עברית‏</option>
                                                        <option value="1">Magyar</option>
                                                        <option value="1">Íslenska</option>
                                                        <option value="1">Italiano</option>
                                                        <option value="1">日本語</option>
                                                        <option value="1">ქართული</option>
                                                        <option value="1">한국어</option>
                                                        <option value="1">Malti</option>
                                                        <option value="1">မြန်မာဘာသာ</option>
                                                        <option value="1">Norsk (bokmål)</option>
                                                        <option value="1">Nederlands</option>
                                                        <option value="1">Polski</option>
                                                        <option value="1">Português (Brasil)</option>
                                                        <option value="1">Português</option>
                                                        <option value="1">Română</option>
                                                        <option value="1">Русский</option>
                                                        <option value="1">Slovenčina</option>
                                                        <option value="1">Shqip</option>
                                                        <option value="1">Svenska</option>
                                                        <option value="1">ภาษาไทย</option>
                                                        <option value="1">Türkçe</option>
                                                        <option value="1">中文(简体)</option>
                                                        <option value="1">中文(台灣)</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Date Format</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-date">
                                                        <option value="DD.MM.YYYY">DD.MM.YYYY</option>
                                                        <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                                                        <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                                                        <option value="YYYYMM/DD">YYYY/MM/DD</option>
                                                        <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text></text>
                                            </div>
                                            <div class="cols-40">
                                                <div class="radio-group">
                                                    <input name="edit-time-format" type="radio" value="12 Hour">
                                                    <tetx style="font-size: 14px; height:16px; line-height: 16px">12 Hour</tetx>
                                                    <input name="edit-time-format" type="radio" value="24 Hour">
                                                    <text>24 Hour</text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Start of the Week</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-week">
                                                        <option value="Mon">Monday</option>
                                                        <option value="Tue">Tuesday</option>
                                                        <option value="Wed">Wednesday</option>
                                                        <option value="thur">Thursday</option>
                                                        <option value="Fri">Friday</option>
                                                        <option value="Sat">Saturday</option>
                                                        <option value="Sun">Sunday</option>
                                                    </select>
                                                </span>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-1" class="scrollbar">
                            <div class="settings-content-inner account">
                                <div class="content-account">
                                    
                                    <div class="separator">
                                        <div class="cols">
                                            <div class="avatar-cols">
                                                <img src="image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" alt="chuv">
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="separator basic-account-settings">
                                        
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Name</text>
                                            </div>
                                            <div class="cols-input">
                                                <input type="text" placeholder="vumanhtuan12a3">
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Email</text>
                                            </div>
                                            <div class="cols-input-1">
                                                <input type="text" placeholder="vumanhtuan12a3@gmail.com">
                                            </div>
                                            <div class="cols-input-2">
                                                <button>
                                                    <text>Change Email</text>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text"></div>
                                            <div class="cols-input">
                                                <p class="cols-input-p">
                                                    <a href="#">
                                                        <text>Add or manage your email addresses</text>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-text">
                                                <text>Password</text>
                                            </div>
                                            <div class="cols-input-3">
                                                <input type="password" placeholder="Current Password">
                                                <button>
                                                    <text>Change Password...</text>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-footer">
                        <div class="cols">
                            <div class="cols-input-1"></div>
                            <div class="cols-input-1"></div>
                            <div class="cols-button-done">
                                <button class="blue-close">
                                    <text>Done</text>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="settings general">
                    <div class="content">
                        <div class="tabs" id="scroll-1">
                            <ul class="tabs-ul">
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon genaral"></span>
                                        <span class="general">
                                            <text>General</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon account"></span>
                                        <span class="account">
                                            <text>Account</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon shortcuts"></span>
                                        <span class="shortcuts">
                                            <text>Shortcuts</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon smartlists"></span>
                                        <span class="smartlists">
                                            <text>SmartLists</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon notifications"></span>
                                        <span class="notifications">                                                <text>Notifications</text>
                                        </span>
                                    </a>
                                </li>
                                <li class="tabs-li">
                                    <a href="#">
                                        <span class="icon about"></span>
                                        <span class="about">
                                            <text>About</text>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-1" id="scroll-1">
                            <div class="settings-content-inner general">
                                <div class="content-general">
                                    <div class="separator basic-general-settings">
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Language</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-language">
                                                        <option value="1">‏العربية‏</option>
                                                        <option value="1">Български</option>
                                                        <option value="1">Català</option>
                                                        <option value="1">Čeština</option>
                                                        <option value="1">Cymraeg</option>
                                                        <option value="1">Dansk</option>
                                                        <option value="1">Deutsch</option>
                                                        <option value="1">Ελληνικά</option>
                                                        <option value="1">English</option>
                                                        <option value="1">Español</option>
                                                        <option value="1">‏فارسی‏</option>
                                                        <option value="1">Français</option>
                                                        <option value="1">‏עברית‏</option>
                                                        <option value="1">Magyar</option>
                                                        <option value="1">Íslenska</option>
                                                        <option value="1">Italiano</option>
                                                        <option value="1">日本語</option>
                                                        <option value="1">ქართული</option>
                                                        <option value="1">한국어</option>
                                                        <option value="1">Malti</option>
                                                        <option value="1">မြန်မာဘာသာ</option>
                                                        <option value="1">Norsk (bokmål)</option>
                                                        <option value="1">Nederlands</option>
                                                        <option value="1">Polski</option>
                                                        <option value="1">Português (Brasil)</option>
                                                        <option value="1">Português</option>
                                                        <option value="1">Română</option>
                                                        <option value="1">Русский</option>
                                                        <option value="1">Slovenčina</option>
                                                        <option value="1">Shqip</option>
                                                        <option value="1">Svenska</option>
                                                        <option value="1">ภาษาไทย</option>
                                                        <option value="1">Türkçe</option>
                                                        <option value="1">中文(简体)</option>
                                                        <option value="1">中文(台灣)</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Date Format</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-date">
                                                        <option value="DD.MM.YYYY">DD.MM.YYYY</option>
                                                        <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                                                        <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                                                        <option value="YYYYMM/DD">YYYY/MM/DD</option>
                                                        <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text></text>
                                            </div>
                                            <div class="cols-40">
                                                <div class="radio-group">
                                                    <input name="edit-time-format" type="radio" value="12 Hour">
                                                    <tetx style="font-size: 14px; height:16px; line-height: 16px">12 Hour</tetx>
                                                    <input name="edit-time-format" type="radio" value="24 Hour">
                                                    <text>24 Hour</text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <div class="cols-60">
                                                <text>Start of the Week</text>
                                            </div>
                                            <div class="cols-40">
                                                <span class="select">
                                                    <select class="edit-week">
                                                        <option value="Mon">Monday</option>
                                                        <option value="Tue">Tuesday</option>
                                                        <option value="Wed">Wednesday</option>
                                                        <option value="thur">Thursday</option>
                                                        <option value="Fri">Friday</option>
                                                        <option value="Sat">Saturday</option>
                                                        <option value="Sun">Sunday</option>
                                                    </select>
                                                </span>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-footer">
                        <div class="cols">
                            <div class="cols-40"></div>
                            <div class="cols-40"></div>
                            <div class="cols-20">
                                <button class="blue-close" id="ad">
                                    <text>Done</text>
                                 </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="dialog listOptions boxCreateList">
                    <!-- <form  class="fisrtFrom"> -->
                    <div class="content">
                        <div class="content-header">
                            <h3 class="center">
                                <text>Create New List</text>
                            </h3>
                            <div class="separator noline">
                                <!-- <form action="createList.php" method="POST"> -->
                                    <input class="big" type="text" id="ajaxList" value placeholder="List Name" name="listName">
                                <!-- </form> -->
                            </div>
                            <div class="separator noline-1">
                                <ul class="content-tabs">
                                    <li>
                                        <a rel="members" class="active">
                                            <text>List Members</text>
        
                                        </a>
                                    </li>
                                    <li>
                                        <a rel = "options" class="active-1">
                                            <text>List options</text>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="separator noline tabs members">
                                <div class="input-fake">
                                    <input class="big" type="text" placeholder="Name or email address...">
                                    <svg class="share rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="share"> <path d="M11.5025,12 C13.7825,12 15.5025,8.84 15.5025,6 C15.5025,3.8 13.7025,2 11.5025,2 C9.3025,2 7.5025,3.8 7.5025,6 C7.5025,8.5 9.0225,12 11.5025,12 L11.5025,12 Z M11.5025,3 C13.1625,3 14.5025,4.34 14.5025,6 C14.5025,8.26 13.1225,11 11.5025,11 C9.8425,11 8.5025,8.26 8.5025,6 C8.5025,4.34 9.8425,3 11.5025,3 L11.5025,3 Z M4.5025,10 L6.0025,10 C6.2825,10 6.5025,9.78 6.5025,9.5 C6.5025,9.22 6.2825,9 6.0025,9 L4.5025,9 L4.5025,7.5 C4.5025,7.22 4.2825,7 4.0025,7 C3.7225,7 3.5025,7.22 3.5025,7.5 L3.5025,9 L2.0025,9 C1.7225,9 1.5025,9.22 1.5025,9.5 C1.5025,9.78 1.7225,10 2.0025,10 L3.5025,10 L3.5025,11.5 C3.5025,11.78 3.7225,12 4.0025,12 C4.2825,12 4.5025,11.78 4.5025,11.5 L4.5025,10 Z M18.2625,14.88 C18.0625,14 17.4025,13.28 16.5225,13.04 L14.2225,12.36 C14.0825,12.32 13.9625,12.26 13.8625,12.14 C13.6625,11.96 13.3425,11.96 13.1625,12.16 C12.9625,12.34 12.9625,12.66 13.1625,12.86 C13.3825,13.08 13.6425,13.24 13.9425,13.32 L16.2425,14 C16.7625,14.14 17.1625,14.58 17.2825,15.1 L17.4425,15.8 C16.9025,16.16 15.2025,17 11.5025,17 C7.7825,17 6.1025,16.14 5.5625,15.8 L5.7225,15.04 C5.8425,14.5 6.2625,14.06 6.8025,13.92 L9.0425,13.32 C9.3425,13.24 9.6225,13.08 9.8625,12.86 C10.0425,12.66 10.0425,12.34 9.8625,12.14 C9.6625,11.96 9.3425,11.96 9.1425,12.14 C9.0425,12.24 8.9225,12.32 8.7825,12.36 L6.5425,12.96 C5.6425,13.2 4.9625,13.92 4.7425,14.82 L4.5225,15.9 C4.4825,16.06 4.5225,16.24 4.6425,16.36 C4.7225,16.42 6.3625,18 11.5025,18 C16.6425,18 18.2825,16.42 18.3625,16.36 C18.4825,16.24 18.5225,16.06 18.4825,15.9 L18.2625,14.88 Z" id="W"></path> </g> </g> </svg>
                                </div>
                            </div>
                        </div>
                        <div class="tab members">
                            <div class="content-inner members">
                                <ul class="content-people">
                                    <li>
                                        <span class="content-people-image">
                                            <div class="user-avatar">
                                                <img src="./image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" title="vumanhtuan12a3" alt="sdsad">
                                            </div>
                                        </span>
                                        <div class="content-people-meta">
                                            <div class="content-people-name">
                                                <span class="content-people-name-label">vumanhtuan12a3</span>
                                                <div class="content-people-name-badge">
                                                    <span class="badge blue">Owner</span>
                                                </div>
                                            </div>
                                            <span class="content-people-email">vumanhtuan12a3@gmail.com</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab options">
                            <div class="content-inner">
                                <ul class="content-options">
                                    <li>
                                        <label class="mute-list-label disabled">
                                            <input class="mute-list" disabled type="checkbox">
                                            <text>Do Not Disturb</text>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-40"></div>
                                <div class="cols-30">
                                    <button class="cancel full">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-30">
                                    <button class="submit full blue" name="save">
                                        <text>Save</text>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <div class="dialog listOptions boxEditList">
                    <!-- <form action="editList.php" method="POST"> -->
                    <div class="content">
                        <div class="content-header">
                            <h3 class="center">
                                <text>Edit New List</text>
                            </h3>
                            <div class="separator noline">
                                <input class="big" type="text" value="" placeholder="List Name" name="EditlistName">
                            </div>
                            <div class="separator noline-1">
                                <ul class="content-tabs">
                                    <li>
                                        <a rel="members" class="active">
                                            <text>List Members</text>
        
                                        </a>
                                    </li>
                                    <li>
                                        <a rel = "options" class="active-1">
                                            <text>List options</text>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="separator noline tabs members">
                                <div class="input-fake">
                                    <input class="big" type="text" placeholder="Name or email address...">
                                    <svg class="share rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="share"> <path d="M11.5025,12 C13.7825,12 15.5025,8.84 15.5025,6 C15.5025,3.8 13.7025,2 11.5025,2 C9.3025,2 7.5025,3.8 7.5025,6 C7.5025,8.5 9.0225,12 11.5025,12 L11.5025,12 Z M11.5025,3 C13.1625,3 14.5025,4.34 14.5025,6 C14.5025,8.26 13.1225,11 11.5025,11 C9.8425,11 8.5025,8.26 8.5025,6 C8.5025,4.34 9.8425,3 11.5025,3 L11.5025,3 Z M4.5025,10 L6.0025,10 C6.2825,10 6.5025,9.78 6.5025,9.5 C6.5025,9.22 6.2825,9 6.0025,9 L4.5025,9 L4.5025,7.5 C4.5025,7.22 4.2825,7 4.0025,7 C3.7225,7 3.5025,7.22 3.5025,7.5 L3.5025,9 L2.0025,9 C1.7225,9 1.5025,9.22 1.5025,9.5 C1.5025,9.78 1.7225,10 2.0025,10 L3.5025,10 L3.5025,11.5 C3.5025,11.78 3.7225,12 4.0025,12 C4.2825,12 4.5025,11.78 4.5025,11.5 L4.5025,10 Z M18.2625,14.88 C18.0625,14 17.4025,13.28 16.5225,13.04 L14.2225,12.36 C14.0825,12.32 13.9625,12.26 13.8625,12.14 C13.6625,11.96 13.3425,11.96 13.1625,12.16 C12.9625,12.34 12.9625,12.66 13.1625,12.86 C13.3825,13.08 13.6425,13.24 13.9425,13.32 L16.2425,14 C16.7625,14.14 17.1625,14.58 17.2825,15.1 L17.4425,15.8 C16.9025,16.16 15.2025,17 11.5025,17 C7.7825,17 6.1025,16.14 5.5625,15.8 L5.7225,15.04 C5.8425,14.5 6.2625,14.06 6.8025,13.92 L9.0425,13.32 C9.3425,13.24 9.6225,13.08 9.8625,12.86 C10.0425,12.66 10.0425,12.34 9.8625,12.14 C9.6625,11.96 9.3425,11.96 9.1425,12.14 C9.0425,12.24 8.9225,12.32 8.7825,12.36 L6.5425,12.96 C5.6425,13.2 4.9625,13.92 4.7425,14.82 L4.5225,15.9 C4.4825,16.06 4.5225,16.24 4.6425,16.36 C4.7225,16.42 6.3625,18 11.5025,18 C16.6425,18 18.2825,16.42 18.3625,16.36 C18.4825,16.24 18.5225,16.06 18.4825,15.9 L18.2625,14.88 Z" id="W"></path> </g> </g> </svg>
                                </div>
                            </div>
                        </div>
                        <div class="tab members">
                            <div class="content-inner members">
                                <ul class="content-people">
                                    <li>
                                        <span class="content-people-image">
                                            <div class="user-avatar">
                                                <img src="./image/7860607c-1b91-4e70-9837-a5f05be3ca01.png" title="vumanhtuan12a3" alt="sdsad">
                                            </div>
                                        </span>
                                        <div class="content-people-meta">
                                            <div class="content-people-name">
                                                <span class="content-people-name-label">vumanhtuan12a3</span>
                                                <div class="content-people-name-badge">
                                                    <span class="badge blue">Owner</span>
                                                </div>
                                            </div>
                                            <span class="content-people-email">vumanhtuan12a3@gmail.com</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab options">
                            <div class="content-inner">
                                <ul class="content-options">
                                    <li>
                                        <label class="mute-list-label disabled">
                                            <input class="mute-list" disabled type="checkbox">
                                            <text>Do Not Disturb</text>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-40">
                                    <svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg>
                                    <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="duplicate" sketch:type="MSArtboardGroup"> <path d="M15.5,2 L7.5,2 C6.121,2 5,3.121 5,4.5 L5,6 L4.5,6 C3.121,6 2,7.121 2,8.5 C2,8.776 2.224,9 2.5,9 C2.776,9 3,8.776 3,8.5 C3,7.673 3.673,7 4.5,7 L5,7 L5,12.5 C5,13.879 6.121,15 7.5,15 L13,15 L13,15.5 C13,16.327 12.327,17 11.5,17 C11.224,17 11,17.224 11,17.5 C11,17.776 11.224,18 11.5,18 C12.879,18 14,16.879 14,15.5 L14,15 L15.5,15 C16.879,15 18,13.879 18,12.5 L18,4.5 C18,3.121 16.879,2 15.5,2 L15.5,2 Z M17,12.5 C17,13.327 16.327,14 15.5,14 L7.5,14 C6.673,14 6,13.327 6,12.5 L6,4.5 C6,3.673 6.673,3 7.5,3 L15.5,3 C16.327,3 17,3.673 17,4.5 L17,12.5 Z M2.5,14 C2.776,14 3,13.776 3,13.5 L3,11.5 C3,11.224 2.776,11 2.5,11 C2.224,11 2,11.224 2,11.5 L2,13.5 C2,13.776 2.224,14 2.5,14 Z M8.5,17 L6.5,17 C6.224,17 6,17.224 6,17.5 C6,17.776 6.224,18 6.5,18 L8.5,18 C8.776,18 9,17.776 9,17.5 C9,17.224 8.776,17 8.5,17 Z M4.5,17 C3.673,17 3,16.327 3,15.5 C3,15.224 2.776,15 2.5,15 C2.224,15 2,15.224 2,15.5 C2,16.879 3.121,18 4.5,18 C4.776,18 5,17.776 5,17.5 C5,17.224 4.776,17 4.5,17 Z M14.691,5.038 C14.63,5.013 14.565,5 14.5,5 L10.5,5 C10.224,5 10,5.224 10,5.5 C10,5.776 10.224,6 10.5,6 L13.293,6 L10.146,9.146 C9.951,9.342 9.951,9.658 10.146,9.853 C10.244,9.951 10.372,10 10.5,10 C10.628,10 10.756,9.951 10.853,9.853 L14,6.707 L14,9.5 C14,9.776 14.224,10 14.5,10 C14.776,10 15,9.776 15,9.5 L15,5.5 C15,5.435 14.987,5.37 14.962,5.309 C14.911,5.187 14.813,5.089 14.691,5.038" id="Fill-1" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
                                </div>
                                <div class="cols-30">
                                    <button class="cancel full edit">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-30">
                                    <button class="submit full blue edit" name="done">
                                        Done
                                    </button>
                                    <input type="text" value="" class="hidden submitListId" name="submitListId">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <div class="dialog confirm">
                    <div class="content">
                        <div class="content-inner notice" tabindex="0">
                            <span class="user-icon"></span>
                            <div class="confirm-context">
                                <div class="default-text">
                                    <h3>
                                        <text>Are you sure you want to delete this to-do forever?</text>
                                    </h3>
                                    <p>
                                        <text>You will not be able to undo this action.</text>
                                    </p>
                                </div>
                                <div class="custom-context">
                                    <h3>"
                                        <span></span>"will be deleted forever.
                                    </h3>
                                    <p>You will not be able to undo this action.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-20"></div>
                                <div class="cols-40">
                                    <button class="cancel full">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-40">
                                   
                                    <button class="submit full blue deleteTask" name="deleteTask">
                                        <text rel="label_delete_task">Delete To-do</text>
                                    </button>
                                    <input type="text" class="textDelete" name="textDelete" method="POST" value="">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dialog confirm">
                    <div class="content">
                        <div class="content-inner notice" tabindex="0">
                            <span class="user-icon"></span>
                            <div class="confirm-context">
                                <div class="default-text hidden">
                                    <h3>
                                        <text>Are you sure you want to delete this to-do forever?</text>
                                    </h3>
                                    <p>
                                        <text>You will not be able to undo this action.</text>
                                    </p>
                                </div>
                                <div class="custom-context">
                                    <h3>
                                        <text>Are you sure you want to delete this comment forever?</text>
                                    </h3>
                                    <p>You will not be able to undo this action.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-20"></div>
                                <div class="cols-40">
                                    <button class="cancel full cancelDeleteComment">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-40">
                                    <!-- <form action="deleteComment.php" method="POST"> -->
                                    <button class="submit full blue buttonDeleteComment">
                                        <text rel="label_delete_task">Delete</text>
                                    </button>
                                    <input type="text" class="DeleteComment" value="">
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dialog confirm">
                    <div class="content">
                        <div class="content-inner notice" tabindex="0">
                            <span class="user-icon"></span>
                            <div class="confirm-context">
                                <div class="default-text hidden">
                                    <h3>
                                        <text>Are you sure you want to delete this to-do forever?</text>
                                    </h3>
                                    <p>
                                        <text>You will not be able to undo this action.</text>
                                    </p>
                                </div>
                                <div class="custom-context">
                                    <h3>
                                        <text>Are you sure you want to delete this List forever?</text>
                                    </h3>
                                    <p>You will not be able to undo this action.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-20"></div>
                                <div class="cols-40">
                                    <button class="cancel full">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-40">
                                    <!-- <form action="deleteList.php" method="POST"> -->
                                    <button class="submit full blue deleteList">
                                        <text rel="label_delete_task">Delete</text>
                                    </button>
                                    <input type="text" class="textDeleteList" name="deleteList" method="POST" value=" ">
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dialog confirm">
                    <div class="content">
                        <div class="content-inner notice" tabindex="0">
                            <span class="user-icon"></span>
                            <div class="confirm-context">
                                <div class="default-text hidden">
                                    <h3>
                                        <text>Are you sure you want to delete this to-do forever?</text>
                                    </h3>
                                    <p>
                                        <text>You will not be able to undo this action.</text>
                                    </p>
                                </div>
                                <div class="custom-context">
                                    <h3>
                                        <text>Are you sure you want to delete this subTask forever?</text>
                                    </h3>
                                    <p>You will not be able to undo this action.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div class="cols">
                                <div class="cols-20"></div>
                                <div class="cols-40">
                                    <button class="cancel full" name="deleteTask">
                                        <text rel="button_cancel">Cancel</text>
                                    </button>
                                </div>
                                <div class="cols-40">
                                    <!-- <form action="deleteSubTask.php" method="POST"> -->
                                    <button class="submit full blue buttonDeleteSubtask">
                                        <text rel="label_delete_task">Delete</text>
                                    </button>
                                    <input type="text" class="textDeleteSubTask" name="deleteSubTask" method="POST" value=" ">
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- <script src="./wunderlist.js"></script> -->
    </body> 
</html>