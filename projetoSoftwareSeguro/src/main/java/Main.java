import controller.MainController;

import java.sql.SQLException;


/*
* import controller.AutenticacaoController;

public class Main {
    public static void main(String[] args) {
        AutenticacaoController acontroller = new AutenticacaoController();
    }
}
* */

public class Main {
//	Usuario usuario;

	public static void main(String[] args) throws SQLException {

		new MainController();

//		ResultSet rs = DatabaseConSingleton.runSelect("SELECT * from test").getResultSet();
//		System.out.println(rs.toString());

	}


}