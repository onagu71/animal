<div class="container" style="margin-top: 30px;">
    <ul class="nav nav-tabs critter-tab">
        <li class="nav-item">
            <a class="nav-link active" id="fish-tab" data-toggle="tab" href="#fish" role="tab" aria-controls="fish" aria-selected="true">물고기</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="insect-tab" data-toggle="tab" href="#insect" role="tab" aria-controls="insect" aria-selected="false">곤충</a>
        </li>
    </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="fish" role="tabpanel" aria-labelledby="fish-tab">
      <div class="ill-title">
        <span class="table-title"><span style="color: #58D3F7;">물고기</span> 도감</span>
        <div class="search" style="text-align: right;">
          <input type="text" class="form-control" id="serch" placeholder="검색" style="width: 150px; display: inline-block;">
        </div>
      </div>
      <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%;">
        <label class="btn btn-secondary active">
          <input type="radio" value="all" class="btn-month" checked> 전체 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="1" class="btn-month"> 1월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="2" class="btn-month"> 2월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="3" class="btn-month"> 3월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="4" class="btn-month"> 4월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="5" class="btn-month"> 5월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="6" class="btn-month"> 6월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="7" class="btn-month"> 7월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="8" class="btn-month"> 8월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="9" class="btn-month"> 9월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="10" class="btn-month"> 10월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="11" class="btn-month"> 11월 </input>
        </label>
        <label class="btn btn-secondary">
          <input type="radio" value="12" class="btn-month"> 12월 </input>
        </label>
      </div>
      <table id="fish-table" class="table-ill table table-hover table-striped">
        <thead>
          <tr>
            <th class="th-sort" scope="col"># <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">이름 <span class="fa fa-sort"></span></th>
            <th scope="col">서식 시기</th>
            <th class="th-sort" scope="col">서식지 <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">출현 시간 <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">크기 <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">판매 가격 <span class="fa fa-sort"></span></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($fishes as $fish): ?>
            <tr>
              <td scope="row"><?=$fish->id?></th>
              <td style="padding: 0px; vertical-align: middle;"><div class="img-back"><img src="<?php echo base_url(); ?>css/img/fishes/<?= $fish->img?>" style="width: 48px;"></div> <?=$fish->name_ko?></td>
              
              <td class="td-month">
                <div class="row">
                  <?php for($i = 1; $i <= 12; $i++): ?>
                    <div class="month<?php if($fish->month & pow(2, $i-1)){ echo " month-active";} ?> month-<?=$i?> col-md-3 col-sm-4" style="padding: 0px;"><?=$i?>월</div>
                  <?php endfor; ?>
                </div>
              </td>
              <td><?=$fish->habitat?></td>
              <td><?=$fish->time?></td>
              <td><?=$fish->size?></td>
              <td><?=$fish->price?>벨</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="insect" role="tabpanel" aria-labelledby="insect-tab">
      <div class="ill-title">
        <span class="table-title"><span style="color: #89CAA2;">곤충</span> 도감</span>
      </div>
      <table id="insect-table" class="table-ill table table-hover table-striped">
        <thead>
          <tr>
            <th class="th-sort" scope="col"># <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">이름 <span class="fa fa-sort"></span></th>
            <th scope="col">서식 시기</th>
            <th class="th-sort" scope="col">서식지 <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">출현 시간 <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">판매 가격 <span class="fa fa-sort"></span></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($insects as $insect): ?>
            <tr>
              <td scope="row"><?=$insect->id-80?></th>
              <td style="padding: 0px; vertical-align: middle;"><div class="img-back"><img src="<?php echo base_url(); ?>css/img/insects/<?=$insect->img?>" style="width: 48px;"></div> <?=$insect->name_ko?></td>
              
              <td class="td-month">
                <div class="row">
                  <?php for($i = 1; $i <= 12; $i++): ?>
                    <div class="month <?php if($insect->month & pow(2, $i-1)){ echo " month-active";} ?> col-md-3 col-sm-4" style="padding: 0px;"><?=$i?>월</div>
                  <?php endfor; ?>
                </div>
              </td>
              <td><?=$insect->habitat?></td>
              <td><?=$insect->time?></td>
              <td><?=$insect->price?>벨</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>