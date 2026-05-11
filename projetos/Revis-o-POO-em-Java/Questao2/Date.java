public class Date {
    private int month;
    private int day;
    private int year;

    public Date(int day, int month, int year) {
        if (month > 0 && month <= 12) {
            this.month = month;
        } else {
            this.month = 1;
        }
        
        if (day > 0 && day <= 31) {
            this.day = day;
        } else {
            this.day = 1;
        }
        
        if (year > 0) {
            this.year = year;
        } else {
            this.year = 2000;
        }
    }

    public int getMonth() {
        return month;
    }

    public void setMonth(int month) {
        if (month > 0 && month <= 12) {
            this.month = month;
        }
    }

    public int getDay() {
        return day;
    }

    public void setDay(int day) {
        if (day > 0 && day <= 31) {
            this.day = day;
        }
    }

    public int getYear() {
        return year;
    }

    public void setYear(int year) {
        if (year > 0) {
            this.year = year;
        }
    }

    public void displayDate() {
        System.out.printf("%02d/%02d/%04d\n", day, month, year);
    }
}
