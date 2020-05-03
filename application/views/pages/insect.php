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
        <span class="table-title" style=""><span style="color: #58D3F7;">물고기</span> 도감</span>
      </div>
      <table id="fish-table" class="table-ill table table-hover table-striped">
        <thead>
          <tr>
            <th class="th-sort" scope="col"># <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">이름 <span class="fa fa-sort"></span></th>
            <th scope="col">서식 시기 </span></th>
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
                  <div class="month <?php if($fish->month & pow(2, $i-1)){ echo " month-active";} ?> col-md-3 col-sm-4" style="padding: 0px;"><?=$i?>월</div>
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
        <span class="table-title" style=""><span style="color: #58D3F7;">곤충</span> 도감</span>
      </div>
      <table id="insect-table" class="table-ill table table-hover table-striped">
        <thead>
          <tr>
            <th class="th-sort" scope="col"># <span class="fa fa-sort"></span></th>
            <th class="th-sort" scope="col">이름 <span class="fa fa-sort"></span></th>
            <th scope="col">서식 시기 </span></th>
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
                  <div class="month <?php if($fish->month & pow(2, $i-1)){ echo " month-active";} ?> col-md-3 col-sm-4" style="padding: 0px;"><?=$i?>월</div>
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
  </div>
</div>
<!--
1
2
4
8
16
32
64
128
256
512
1024
2048
-->