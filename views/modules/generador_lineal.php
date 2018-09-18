<h4><small>Algoritmo Congruencial lineal mixto</small></h4>
<div class="col-md-1"></div>
    <div class="col-md-7">
        <div class="site-heading">
            <h1 class="text-center text-capitalize">Algoritmo Congruencial lineal mixto</h1>
        </div> 
        <form method="post">
            <div class="form-group row text-center">
                <div class="col-xs-2 col-md-offset-2">
                    <label for="ex1">semilla</label>
                    <input type="text" class="form-control" name="xo_date" placeholder="Xo">
                </div>
                <div class="col-xs-2">
                    <label for="ex2">multiplicador</label>
                    <input type="text" class="form-control" name="a_date" placeholder="a">
                </div>
                <div class="col-xs-2">
                    <label for="ex3">modulo</label>
                    <input type="text" class="form-control" name="m_date" placeholder="m">
                </div>
            </div>
            <div class="col-md-3 col-md-offset-5">
                <button type="submit" name="submit" class="btn btn-primary">Calcular</button>
            </div>
        </form> 
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="col-md-2 text-center">#</th>
                    <th class="col-md-2 text-center">Xn</th>
                    <th class="col-md-2 text-center">(a*Xn+c)/m</th>
                    <th class="col-md-2 text-center">Residuo</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                <?php

                $generar = new GeneradorController();
                $generar -> datesFilterController();

                ?>
    </div>
</div>
