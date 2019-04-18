<section id="<?= $data->sectionID() ?>" class="where-to-buy">
  <div class="sectionHeader">
    <h1><?= $data->title() ?></h1>
  </div>
  <div class="beerFinder" id="app">
    <div class="searchPanel">
      <div class="beerFinder__tabs">
        <div class="beerFinder__tab active" id="tab__map">Map</div>
        <div class="beerFinder__tab" id="tab__list">List</div>
      </div>
      <form class="searchForm">
        <div class="searchPanel__row searchbar">
          <input type="text" placeholder="Enter your zip code" id="zip" /><i class="fas fa-search zipSearchButton"></i>
        </div>
        <div class="searchPanel__row">
          <div class="searchPanel__button active" id="restaurant">
            Restaurant/Bar
          </div>
          <div class="searchPanel__button active" id="store">
            Store
          </div>
        </div>
        <div class="searchPanel__row">
          <select>
            <option value="lagarClara">Lagar Clara</option>
            <option value="lagarNegra">Lagar Negra</option>
            <option value="unaSanLuis">Una San Luis</option>
          </select>
        </div>
        <div class="searchPanel__row">
          <div class="searchPanel__button active" id="bottles">
            Bottles
          </div>
          <div class="searchPanel__button active" id="cans">
            Cans
          </div>
        </div>
      </form>
    </div>
    <div class="mapPanel" id="map"></div>
    <div class="listPanel">
    </div>
  </div>
</section>
