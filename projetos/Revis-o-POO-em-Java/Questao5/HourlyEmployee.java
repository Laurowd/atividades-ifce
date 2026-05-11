public class HourlyEmployee extends Employee {
    private double wage;
    private double hours;

    public HourlyEmployee(String firstName, String lastName, String cpf, double wage, double hours) {
        super(firstName, lastName, cpf);
        this.wage = wage >= 0.0 ? wage : 0.0;
        this.hours = (hours >= 0.0 && hours <= 168.0) ? hours : 0.0;
    }

    public void setWage(double wage) {
        this.wage = wage >= 0.0 ? wage : 0.0;
    }

    public double getWage() {
        return wage;
    }

    public void setHours(double hours) {
        this.hours = (hours >= 0.0 && hours <= 168.0) ? hours : 0.0;
    }

    public double getHours() {
        return hours;
    }

    @Override
    public double earnings() {
        if (getHours() <= 40) {
            return getWage() * getHours();
        } else {
            return 40 * getWage() + (getHours() - 40) * getWage() * 1.5;
        }
    }

    @Override
    public String toString() {
        return String.format("Empregado Horista: %s\nSalário por Hora: R$ %.2f; Horas Trabalhadas: %.2f", super.toString(), getWage(), getHours());
    }
}
