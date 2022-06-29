<div class="filtrer" onclick="filtros()">
            <h4>Filtrar</h4>
            <i class="fas fa-filter"></i>
        </div>

        <!-- Filtros por categorias-->
        <div class="filt" id="opcion_filtro">
            <div class="filtro">
                <h4>Categorias</h4>
                <select name="categorias" id="categorias" onchange="cambio()">
                    <option value="ver">Ver todo</option>
                    <option value="alimento">Alimento</option>
                    <option value="cuidado">Cuidado e higiene</option>
                    <option value="accesorios">Accesorios</option>
                </select>
            </div>

            <!-- Filtros por marcas -->
            <div class="filtro">
                <h4>Marcas</h4>
                <select name="marcas" id="marcas" onchange="cambio_marcas()">
                    <option value="ver">Ver todo</option>
                    <option value="hills">Hill's</option>
                    <option value="canbo">Canbo</option>
                    <option value="royal">Royal Canin</option>
                    <option value="purina">Purina</option>
                </select>
            </div>

            <!-- Filtros por precios -->
            <div class="filtro">
                <h4>Precio</h4>
                <select name="Precio" id="precio" onchange="cambio_precio()">
                    <option value="ver">Ver todo</option>
                    <option value="rango">0 - 40</option>
                    <option value="rango">40 - 80</option>
                    <option value="rango">80 - 120</option>
                    <option value="rango">120 - 160</option>
                </select>
            </div>
        </div>