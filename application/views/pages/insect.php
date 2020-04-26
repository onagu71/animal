<div class="container">
  <h3>물고기 도감</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">모습</th>
        <th scope="col">이름</th>
        <th scope="col">서식 시기</th>
        <th scope="col">서식지</th>
        <th scope="col">출현 시간</th>
        <th scope="col">크기</th>
        <th scope="col">판매 가격</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($fishes as $fish): ?>
        <tr>
          <th scope="row"><?=$fish->id?></th>
          <td style="padding: 0px; vertical-align: middle;"><img src="<?php echo base_url(); ?>img/<?= $fish->img?>"></td>
          <td><?=$fish->name_ko?></td>
          <td style="width: 180px;">
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