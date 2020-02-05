<?php
error_reporting(0);
class SearchmovieModel extends db
{
    public function ListAllMovie($key_movie)
    {
        $qr = "SELECT * FROM movie WHERE name_movie like '%$key_movie%'";
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            $output = '';
            while ($row = mysqli_fetch_array($rs)) {
                $output .= '<ul id="search-list" name="search-list" >
                            <li><a href="Phim/Information_Movie/' . $row["slug_movie"] . '">
                                    ' . $row["name_movie"] . '
                                </a>
                            </li>
                </ul>';
            }
        }
        echo $output;
    }

    public function ListMovieFollowKey($key_movie)
    {
        $qr = "SELECT * FROM movie WHERE name_movie like '%$key_movie%'";
        $rs = mysqli_query($this->conn, $qr);
        $rs_row = mysqli_num_rows($rs);
        if ( $rs_row > 0) {
            $output = '';
            $output .= '<div class="search-tag col-md-12">
            <p> ' . $rs_row . ' kết quả tìm kiếm cho từ khóa: <span>' . $key_movie . '</span></p>
                    </div>';
            $output .= '<div class="search-title-movie col-md-12 d-flex">';
            while ($row = mysqli_fetch_array($rs)) {
                $output .= '
                            <div class="col-md-4 pb-5">
                            <article class="search-item d-flex">
                                <div class="item-thumb" >
                                    <a href="./Information_Movie/'.$row["slug_movie"].'">
                                        <img src="../public/images/' . $row["image"] . '">
                                    </a>
                                </div>
                                <h5>
                                    <a href="./Information_Movie/'.$row["slug_movie"].'">' . $row["name_movie"] . '</a>
                                </h5>
                            </article>
                            </div>';
            }
            $output .= '</div></div>';
        }
        echo $output;
    }
    
}
