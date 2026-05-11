package exercicio1;

import java.time.LocalDate;

public class CalendarDay {

    public String findDay(int day, int month, int year) {
        // A classe LocalDate facilita a criação e manipulação de datas
        LocalDate date = LocalDate.of(year, month, day);
        
        // getDayOfWeek() retorna um enum (ex: MONDAY, TUESDAY)
        // O método name() converte esse enum para uma String em letras maiúsculas
        return date.getDayOfWeek().name();
    }
}