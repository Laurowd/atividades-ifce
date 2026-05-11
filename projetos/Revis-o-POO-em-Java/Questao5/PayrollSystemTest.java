public class PayrollSystemTest {
    public static void main(String[] args) {
        SalariedEmployee salariedEmployee = new SalariedEmployee("João", "Silva", "111.111.111-11", 800.00);
        HourlyEmployee hourlyEmployee = new HourlyEmployee("Maria", "Oliveira", "222.222.222-22", 16.75, 45); // 40 horas normais + 5 extras
        CommissionEmployee commissionEmployee = new CommissionEmployee("Pedro", "Santos", "333.333.333-33", 10000, 0.06);
        BasePlusCommissionEmployee basePlusCommissionEmployee = new BasePlusCommissionEmployee("Ana", "Pereira", "444.444.444-44", 5000, 0.04, 300);

        System.out.println("Processando empregados individualmente:\n");
        System.out.printf("%s\nGanho: R$ %.2f\n\n", salariedEmployee, salariedEmployee.earnings());
        System.out.printf("%s\nGanho: R$ %.2f\n\n", hourlyEmployee, hourlyEmployee.earnings());
        System.out.printf("%s\nGanho: R$ %.2f\n\n", commissionEmployee, commissionEmployee.earnings());
        System.out.printf("%s\nGanho: R$ %.2f\n\n", basePlusCommissionEmployee, basePlusCommissionEmployee.earnings());

        Employee[] employees = new Employee[4];
        employees[0] = salariedEmployee;
        employees[1] = hourlyEmployee;
        employees[2] = commissionEmployee;
        employees[3] = basePlusCommissionEmployee;

        System.out.println("Processando empregados polimorficamente (Iterando na array):\n");
        for (Employee currentEmployee : employees) {
            System.out.println(currentEmployee);
            System.out.printf("Ganho Mês: R$ %.2f\n\n", currentEmployee.earnings());
        }
    }
}
