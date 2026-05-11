public class DateTest {
    public static void main(String[] args) {
        Date data1 = new Date(15, 8, 2023);
        System.out.print("Data 1: ");
        data1.displayDate();

        Date data2 = new Date(35, 13, -2020); // Valores inválidos para testar validação
        System.out.print("Data 2 (com valores inválidos corrigidos para padrão): ");
        data2.displayDate();

        data2.setDay(25);
        data2.setMonth(12);
        data2.setYear(2024);
        System.out.print("Data 2 (após os métodos set): ");
        data2.displayDate();
    }
}
