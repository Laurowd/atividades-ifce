public class EmployeeTest {
    public static void main(String[] args) {
        Employee emp1 = new Employee("João", "Silva", 3000.00);
        Employee emp2 = new Employee("Maria", "Souza", 4500.00);

        System.out.println("Salário anual de " + emp1.getFirstName() + " " + emp1.getLastName() + ": R$ " + (emp1.getMonthlySalary() * 12));
        System.out.println("Salário anual de " + emp2.getFirstName() + " " + emp2.getLastName() + ": R$ " + (emp2.getMonthlySalary() * 12));

        System.out.println("\nConcedendo aumento de 10%...");
        emp1.setMonthlySalary(emp1.getMonthlySalary() * 1.10);
        emp2.setMonthlySalary(emp2.getMonthlySalary() * 1.10);

        System.out.println("\nNovo salário anual de " + emp1.getFirstName() + " " + emp1.getLastName() + ": R$ " + (emp1.getMonthlySalary() * 12));
        System.out.println("Novo salário anual de " + emp2.getFirstName() + " " + emp2.getLastName() + ": R$ " + (emp2.getMonthlySalary() * 12));
    }
}
