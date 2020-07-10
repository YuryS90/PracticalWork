<?php

class TicTac // игровое поле
{
    protected $map = [];

    public function __construct(int $n = 3)
    {
        $this->n = $n;
        $this->initMap($n);
    }


    // инициализация игрового поля
    public function initMap(int $n)
    {
        $this->map = [];

        for ($i = 0; $i < $n; $i++) {  // этот for перебирает строки

            $row = [];

            for ($j = 0; $j < $n; $j++) { // этот for перебирает столбцы
                $row[] = null;
            }
            $this->map[] = $row;
        }

        return $this;
    }

    // проверка доступности хода
    public function available(int $i, int $j): bool
    {
        $av = false; // чтобы не писать доп else

        if ($i >= 0 && $i < count($this->map)) { // проверили, что позиция в СТРОКЕ, которую указываем в index, есть
            if ($j >= 0 && $j < count($this->map[$i])) { // проверили, что позиция в СТОЛБЦЕ, которую указываем в index, есть
                if ($this->map[$i][$j]  === null) { // если она пустая (не занята ли эта клентка)
                    $av = true;
                }
            }
        }

        return $av;
    }


    // поставить крестик 
    public function putCross(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 1;
        }
        return $this;
    }


    // поставить нолик
    public function putNull(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 0;
        }
        return $this;
    }


    // проверка победиля (крестика или нолика) по СТРОКАМ
    private function checWinByRow(array $map)
    {
        foreach ($map as $row) {
            $winner = $row[0]; // запоминаем 0 элемент в строке или нулевую строку?
            for ($i = 1; $i < count($row); $i++) {
                if ($row[$i] !== $row[$i - 1]) { // если вдруг какой-то не равен предыдущему,то null
                    $winner = null;
                }
            }
            if ($winner !== null) { // если не равен null, то возвращаем нулевую строку?
                return $winner;
            }
        }
        return null; // если в одной из строк не нашёл
    }


    // Транспонирование матрицы
    private function transpose($array)
    {
        return array_map(null, ...$array);
    }


    // проверка победиля (крестика или нолика) по столбцам
    private function checWinByCol(array $map)
    {
        return $this->checWinByRow($this->transpose($map));
    }


    public function checWin()
    {
        if (($winner = $this->checWinByRow($this->map)) !== null) {
            return $winner;
        }
        if (($winner = $this->checWinByCol($this->map)) !== null) { 
            return $winner;
        }

        // if (($winner = $this->checWinByMainDiag()) !== null) {
        //     return $winner;
        // }

        // if (($winner = $this->checWinBySecondDiag($this->map)) !== null) {
        //     return $winner;
        // }
        return null;
    }



    //вытягиваем пустой массив карты для Area
    public function getMap()
    {
        return $this->map;
    }



    // public function setMap(array $map)
    // {
    //     $this->map = $map;
    //     return $this;
    // }















    // главная диагональ
    public function checWinByMainDiag()
    {
        $winner = $this->map[0][0];

        $i = 0;
        foreach ($this->map as $row) {
            if ($row[$i++] !== $this->map[0][0]) {
                $winner = null;
            }
        }
        return $winner;
    }

    // побочная диагональ
    /**
     *  [1, 0, 1],
     *  [1, 0, 0],
     *  [0, 1, 1]
     */
    public function checWinBySecondDiag()
    {
        $n = count($this->map) - 1;
        $winner = $this->map[0][$n];

        $i = $n;
        foreach ($this->map as $row) {
            if ($row[$i--] !== $this->map[0][$n]) {
                $winner = null;
            }
        }
        return $winner;
    }

    //     public function mapSize()
    //     {
    //         return count($this->map);
    //     }


}
