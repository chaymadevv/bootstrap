    <?php require "public/header.html.php" ?>
    <!-- https://getbootstrap.com/docs/5.3/layout/columns/ -->
    <main>
        <section>
            <h2>section 1</h2>
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                    <div class="col">
                        One of three columns
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>section 2</h2>
            <div class="container text-center">
                <div class="row" style="height:150px;">
                    <div class="col-3 align-self-start">
                        One of three columns
                    </div>
                    <div class="col-3 align-self-center">
                        One of three columns
                    </div>
                    <div class="col-3 align-self-end">
                        One of three columns
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>section 3</h2>
            <div class="container text-center">
                <div class="row justify-content-start">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-4">
                        One of two columns
                    </div>
                    <div class="col-4">
                        One of two columns
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Section4</h2>
            <div class="container">
                <div class="row">
                    <div class="col-9">.col-9</div>
                    <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
                    <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
                    <div class="col-2">.col-2</div>
                    <div class="col-1">.col-1</div>
                </div>
            </div>
        </section>
        <section class="row">
            <h1>Section 5</h1>
            <div class="col-3">col-3</div>
            <div class="col-5">col-5</div>
            <div class="col-4">col</div>
            <div class="col-4">col</div>
        </section>
        <section>
            <h2>section 6</h2>
            <div class="container text-center">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col">Column</div>
                    <div class="col">Column</div>
                    <div class="col">Column</div>
                    <div class="col">Column</div>
                </div>
            </div>
            <section>
                <h2>section 7</h2>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-2">.col-lg-6 .col-md-3 .col-sm-4</div>
                        <div class="col-lg-6 col-md-7 col-sm-4">.col-lg-6 .col-md-7 .col-sm-4</div>
                        <div class="col-lg-6 col-md-3 col-sm-2">.col-lg-6 .col-md-3 .col-sm-2</div>
                        <div class="col-lg-6 col-md-9 col-sm-4">.col-lg-6 .col-md-9 .col-sm-4</div>
                    </div>
                </div>
            </section>
            <section>
                <h2>section 8</h2>
                <div class="container text-center">
                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                    <div class="row">
                        <div class="col-6 col-md-8">.col-md-8</div>
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                    </div>

                    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6 ">.col-6 .col-md-4</div>
                        <div class="col-lg-6 col-md-4 col-6 ">.col-6 .col-md-4</div>
                        <div class="col-lg-6 col-md-4 col-6 ">.col-6 .col-md-4</div>
                    </div>

                    <!-- Columns are always 50% wide, on mobile and desktop -->
                    <div class="row">
                        <div class="col-6 col-sm-9">.col-6</div>
                        <div class="col-6 col-sm-4">.col-6</div>
                    </div>
                </div>
            </section>
    </main>
    <?php require "public/footer.html.php" ?>