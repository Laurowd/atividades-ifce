public class SalariedEmployee extends Employee {
    private double weeklySalary;

    public SalariedEmployee(String firstName, String lastName, String cpf, double weeklySalary) {
        super(firstName, lastName, cpf);
        this.weeklySalary = weeklySalary >= 0.0 ? weeklySalary : 0.0;
    }

    public void setWeeklySalary(double weeklySalary) {
        this.weeklySalary = weeklySalary >= 0.0 ? weeklySalary : 0.0;
    }

    public double getWeeklySalary() {
        return weeklySalary;
    }

    @Override
    public double earnings() {
        return getWeeklySalary();
    }

    @Override
    public String toString() {
        return String.format("Empregado Assalariado: %s\nSalário Semanal: R$ %.2f", super.toString(), getWeeklySalary());
    }
}
