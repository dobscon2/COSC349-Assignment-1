import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class PosClient {
	Connection conn = null;
	public static void main(String[] args) {
		try {
			conn = DriverManager.getConnection("jdbc:mysql://192.168.56.12/hvlofi?user=posuser&password=posaccount");

		System.out.println("HV LO-FI Point Of Sale Terminal");

		System.out.println("Please Login");


	}
}
