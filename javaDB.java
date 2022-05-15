import java.sql.*;

public class javaDB{
    public static void main(String[] args) {
        Connection conn = null;
        try{
            Class.forName("com.mysql.jdbc.Driver");
            System.out.println("Driver Loaded");
            String username = "remzi.tepe";
            String password = "nUHU4yD5";
            String dbName = "remzi_tepe";
            conn = DriverManager.getConnection("jdbc:mysql://dijkstra.ug.bcc.bilkent.edu.tr/" + dbName, username, password);
            System.out.println("Connection Successful");
        }   catch(Exception e){
            e.printStackTrace();
        }
        Statement stmt = null;
/*
        String personTable= "CREATE TABLE person (" +
            "id MEDIUMINT NOT NULL AUTO_INCREMENT," +
            "first_name varchar(50), " +
            "last_name varchar(50) , " +
            "username varchar(50), " +
            "identification_num varchar(200), " +
            "birthday date, " +
            "email char(200), " +
            "phone_num varchar(200)," +
            "password VARCHAR(50)," +
            "PRIMARY KEY(id)) ENGINE=INNODB";
            */
        String userTable = "CREATE TABLE user(" +
                "user_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "first_name varchar(50), " +
                "last_name varchar(50) , " +
                "username varchar(50), " +
                "identification_num varchar(200), " +
                "birthday date, " +
                "email char(200), " +
                "phone_num varchar(200)," +
                "password VARCHAR(50)," +
                "balance varchar(50)," +
                "UNIQUE(username)," +
                "PRIMARY KEY(user_id)) ENGINE=INNODB";
        String adminTable = "CREATE TABLE admin(" +
                "admin_id MEDIUMINT NOT NULL AUTO_INCREMENT, " +
                "first_name varchar(50), " +
                "last_name varchar(50) , " +
                "username varchar(50), " +
                "identification_num varchar(200), " +
                "birthday date, " +
                "email char(200), " +
                "phone_num varchar(200)," +
                "password VARCHAR(50)," +
                "balance varchar(50)," +
                "PRIMARY KEY (admin_id), " +
                " FOREIGN KEY (username) REFERENCES user(username) ON UPDATE CASCADE ON DELETE CASCADE"+
                ") ENGINE=INNODB";
        String editorTable = "CREATE TABLE editor(" +
                "editor_id MEDIUMINT NOT NULL AUTO_INCREMENT, "+
                "first_name varchar(50), " +
                "last_name varchar(50) , " +
                "username varchar(50), " +
                "identification_num varchar(200), " +
                "birthday date, " +
                "email char(200), " +
                "phone_num varchar(200)," +
                "password VARCHAR(50)," +
                "balance varchar(50)," +
                "num_of_successful_betslip int," +
                "ratio_of_success decimal(3,2), "+
                "editor_bio varchar(1000)," +
                "PRIMARY KEY(editor_id)) ENGINE=INNODB";

        String debitCardTable = "CREATE TABLE debit_card(" +
                "card_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "user_id MEDIUMINT  , " +
                " card_name varchar(100)," +
                " card_expiration_date date," +
                " card_cvc INT,"+
                " PRIMARY KEY(card_id, user_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";

        String betslipTable = "CREATE TABLE betslip(" +
                "betslip_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "betslip_date date, " +
                " betslip_time time," +
                " name varchar(100)," +
                " no_of_bets int,"+
                " admin_id mediumint,"+
                " user_id mediumint,"+
                " isShared boolean,"+
                " isSaved boolean,"+
                " isPlayed boolean,"+
                " PRIMARY KEY(betslip_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (admin_id) REFERENCES admin(admin_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String transactionTable = "CREATE TABLE transaction(" +
                "transaction_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "betslip_id mediumint, " +
                " lottery_id mediumint," +
                " amount_of_cost int," +
                " transaction_date date,"+
                " transaction_time time,"+
                " PRIMARY KEY(transaction_id), " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (lottery_id) REFERENCES lottery(lottery_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String betTable = "CREATE TABLE bet(" +
                "bet_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "match_id mediumint, " +
                "mbn int, " +
                " bet_date date," +
                " bet_time time," +
                " category varchar(100),"+
                "odd_type ENUM('MR1', 'MRX', 'MR2', 'HO', 'HU', 'HR1', 'HRX', 'HR2', 'MG1', 'MG0') NOT NULL," +
                "odd_value decimal(10,2)," +
                " PRIMARY KEY(bet_id), " +
                "FOREIGN KEY (match_id) REFERENCES matchs(match_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String matchTable = "CREATE TABLE matchs(" +
                "match_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                " match_date date, " +
                " match_time time," +
                " match_category varchar(100)," +
                " league varchar(100),"+
                " PRIMARY KEY(match_id) " +
                ") ENGINE=INNODB";
        String lotteryTable = "CREATE TABLE lottery(" +
                "lottery_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "user_id mediumint, " +
                " lottery_numbers int," +
                " lottery_type varchar(100) NOT NULL," +
                " winning_date date NOT NULL,"+
                " PRIMARY KEY(lottery_id), " +
                "FOREIGN KEY (lottery_type) REFERENCES lottery_type(lottery_type) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (winning_date) REFERENCES winning_nums(winning_date) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String lotteryTypeTable = "CREATE TABLE lottery_type(" +
                "lottery_type varchar(100) NOT NULL," +
                "lottery_price decimal(10,2), " +
                " PRIMARY KEY(lottery_type) " +
                ") ENGINE=INNODB";
        String winning_numsTable = "CREATE TABLE winning_nums(" +
                "winning_date date NOT NULL," +
                "number int, " +
                " PRIMARY KEY(winning_date) " +
                ") ENGINE=INNODB";
        String teamTable = "CREATE TABLE team(" +
                "team_id MEDIUMINT NOT NULL AUTO_INCREMENT," +
                "team_name varchar(100), " +
                " PRIMARY KEY(team_id) " +
                ") ENGINE=INNODB";
        String friendsTable = "CREATE TABLE friends(" +
                "user_id MEDIUMINT NOT NULL," +
                "friend_id mediumint NOT NULL, " +
                " PRIMARY KEY(user_id, friend_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (friend_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String followsTable = "CREATE TABLE follows(" +
                "user_id MEDIUMINT NOT NULL," +
                "editor_id mediumint NOT NULL, " +
                " PRIMARY KEY(user_id, editor_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (editor_id) REFERENCES editor(editor_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String likesTable = "CREATE TABLE likes(" +
                "betslip_id MEDIUMINT NOT NULL," +
                "user_id mediumint NOT NULL, " +
                " PRIMARY KEY(betslip_id, user_id), " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String editorSharesTable = "CREATE TABLE editor_shares(" +
                "editor_id MEDIUMINT NOT NULL," +
                "betslip_id mediumint NOT NULL, " +
                "comment varchar(256) , " +
                " PRIMARY KEY(editor_id, betslip_id), " +
                "FOREIGN KEY (editor_id) REFERENCES editor(editor_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String userSharesTable = "CREATE TABLE user_shares(" +
                "user_id MEDIUMINT NOT NULL," +
                "betslip_id mediumint NOT NULL, " +
                "comment varchar(256) , " +
                " PRIMARY KEY(user_id, betslip_id), " +
                "FOREIGN KEY (user_id) REFERENCES editor(editor_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String hasTable = "CREATE TABLE has(" +
                "bet_id MEDIUMINT NOT NULL," +
                "betslip_id mediumint NOT NULL, " +
                " PRIMARY KEY(bet_id, betslip_id), " +
                "FOREIGN KEY (bet_id) REFERENCES bet(bet_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String commentsMatchTable = "CREATE TABLE comments_match(" +
                "user_id MEDIUMINT NOT NULL," +
                "match_id mediumint NOT NULL, " +
                "comment varchar(256) , " +
                " PRIMARY KEY(user_id, match_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (match_id) REFERENCES matchs(match_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String commentsBetslipTable = "CREATE TABLE comments_betslip(" +
                "user_id MEDIUMINT NOT NULL," +
                "betslip_id mediumint NOT NULL, " +
                "comment varchar(256) , " +
                " PRIMARY KEY(user_id, betslip_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (betslip_id) REFERENCES betslip(betslip_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String ownsTable = "CREATE TABLE owns(" +
                "user_id MEDIUMINT NOT NULL," +
                "card_id mediumint NOT NULL, " +
                " PRIMARY KEY(user_id, card_id), " +
                "FOREIGN KEY (user_id) REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (card_id) REFERENCES debit_card(card_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";
        String containsTable = "CREATE TABLE contains(" +
                "team_id MEDIUMINT NOT NULL," +
                "match_id mediumint NOT NULL," +
                " PRIMARY KEY(team_id, match_id), " +
                "FOREIGN KEY (team_id) REFERENCES team(team_id) ON UPDATE CASCADE ON DELETE RESTRICT, " +
                "FOREIGN KEY (match_id) REFERENCES matchs(match_id) ON UPDATE CASCADE ON DELETE RESTRICT " +
                ") ENGINE=INNODB";

        String addTeam = "INSERT INTO team(team_name)" +
                "VALUES ('Liverpool')," +
                "('Real Madrid')," +
                "('Barcelona')," +
                "('Ankaragücü')";
        String addMatch = "INSERT INTO matchs(match_date, match_time, match_category, league)" +
                "VALUES (curdate(), now(), 'football', 'premier')," +
                "(curdate(), now(), 'football', 'premier')";
        String addContains = "INSERT INTO contains(team_id, match_id)" +
                "VALUES (1, 1)," +
                "(2, 1)," +
                "(3, 2)," +
                "(4, 2)";
        String addBet = "INSERT INTO bet(match_id, mbn, bet_date, bet_time, category, odd_type, odd_value)" +
                "VALUES (1, 5, curdate(), now(), 'football', 'MR1', 1.5)," +
                "(1, 5, curdate(), now(), 'football','MRX', 1.7)," +
                "(1, 5, curdate(), now(), 'football','MR2', 1.2)," +
                "(1, 5, curdate(), now(), 'football','HU', 1.9)," +
                "(1, 5, curdate(), now(), 'football','HO', 2.0)," +
                "(1, 5, curdate(), now(), 'football','HR1', 3.0)," +
                "(1, 5, curdate(), now(), 'football','HRX', 1.0)," +
                "(1, 5, curdate(), now(), 'football','HR2', 4.0)," +
                "(1, 5, curdate(), now(), 'football','MG1', 5.0)," +
                "(1, 5, curdate(), now(), 'football','MG0', 6.0)," +
                "(2, 5, curdate(), now(), 'football','MR1', 1.5)," +
                "(2, 5, curdate(), now(), 'football','MRX', 1.7)," +
                "(2, 5, curdate(), now(), 'football','MR2', 1.2)," +
                "(2, 5, curdate(), now(), 'football','HU', 1.9)," +
                "(2, 5, curdate(), now(), 'football','HO', 2.0)," +
                "(2, 5, curdate(), now(), 'football','HR1', 3.0)," +
                "(2, 5, curdate(), now(), 'football','HRX', 1.0)," +
                "(2, 5, curdate(), now(), 'football','HR2', 4.0)," +
                "(2, 5, curdate(), now(), 'football','MG1', 5.0)," +
                "(2, 5, curdate(), now(), 'football','MG0', 6.0)";

        try{
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS contains");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS owns");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS comments_betslip");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS comments_match");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS has");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS editor_shares");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS user_shares");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS likes");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS follows");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS friends");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS team");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS transaction");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS lottery");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS winning_nums");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS lottery_type");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS bet");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS matchs");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS betslip");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS admin");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS debit_card");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS editor");
            stmt = conn.createStatement();
            stmt.executeUpdate("DROP TABLE IF EXISTS user");

            stmt = conn.createStatement();
            stmt.executeUpdate(userTable);
            System.out.println("User Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(adminTable);
            System.out.println("Admin Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(editorTable);
            System.out.println("Editor Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(debitCardTable);
            System.out.println("Debit Card Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(betslipTable);
            System.out.println("Betslip Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(matchTable);
            System.out.println("Match Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(betTable);
            System.out.println("Bet Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(lotteryTypeTable);
            System.out.println("Lottery Type Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(winning_numsTable);
            System.out.println("Winning Nums Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(lotteryTable);
            System.out.println("Lottery Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(transactionTable);
            System.out.println("Transaction Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(teamTable);
            System.out.println("Team Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(friendsTable);
            System.out.println("Friends Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(followsTable);
            System.out.println("Follows Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(likesTable);
            System.out.println("Likes Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(editorSharesTable);
            System.out.println("Editor Shares Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(userSharesTable);
            System.out.println("User Shares Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(hasTable);
            System.out.println("Has Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(commentsMatchTable);
            System.out.println("Comments Match Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(commentsBetslipTable);
            System.out.println("Comments Betslip Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(ownsTable);
            System.out.println("Owns Table created");
            stmt = conn.createStatement();
            stmt.executeUpdate(containsTable);
            System.out.println("Contains Table created");
            stmt.executeUpdate(addTeam);
            System.out.println("added odds");
            stmt.executeUpdate(addMatch);
            stmt.executeUpdate(addContains);
            stmt.executeUpdate(addBet);


        } catch (Exception e){
            e.printStackTrace();
        }
    }
}