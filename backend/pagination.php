<div class="pagination-area mt-30 mb-50">
                    <nav aria-label="Page navigation example">
                    <br><?php if ($pages==0){echo "No Data";}else{ ?>Result : <?php echo $page; ?> of <?php  echo $pages; echo "&nbsp;Pages";} ?> <br>
                        <ul class="pagination justify-content-start">




                            <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=1"><<</a></li>
                            <?php $ggg1=$page-3; if($ggg1>0){?>

                            <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page-3; ?>"><?php echo $page-3; ?></a></li> <?php } ?>
                            <?php $ggg2=$page-2; if($ggg2>0){?>
                            <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page-2; ?>"><?php echo $page-2; ?></a></li><?php } ?>
                            <?php $ggg3=$page-1; if($ggg3>0){?>
                            
                            <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li>
                            <?php } ?>

                            
                            <li class="page-item active"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                         
                            <?php $ggg3=$page+1; if($ggg3<=$pages){?>
                            <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
                            
                            <?php $ggg3=$page+2; if($ggg3<=$pages){?>
                                <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page+2; ?>"><?php echo $page+2; ?></a></li><?php } ?>
                                <?php $ggg3=$page+3; if($ggg3<=$pages){?>
                                <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page+3; ?>"><?php echo $page+3; ?></a></li><?php } ?>
                                <?php $ggg3=$page+4; if($ggg3<=$pages){?>
                                <li class="page-item"><a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page+4; ?>"><?php echo $page+4; ?></a></li><?php } ?>
                       
                            
                            
                            <li class="page-item">
                                
                            <a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $page+1; ?>">></i></a>
                                        </li>
                            <li class="page-item">
                            <a class="page-link" href="navbar-page.php?cari=<?php echo $cari;?>&halaman=<?php echo $pages; ?>">>></i></a>
                           
                        </li>
         
                        </ul>
                    </nav>
                </div>
