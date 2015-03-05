import java.awt.*;
import javax.swing.*;

public class DrawHangman extends JPanel{
	public void paintComponent(Graphics g){
		super.paintComponent(g);
		
		this.setBackground(Color.BLACK);
		g.setColor(Color.PINK);
		g.fillOval(75, 75, 50, 50);
		g.fillRect(100, 125, 5, 80);
		g.drawLine(100,130, 160,160);
		g.drawLine(100,130, 30,160);
		g.setColor(Color.GRAY);
		g.fillRect(25, 25, 200, 10);
		g.fillRect(225, 25, 10, 300);
		g.fillRect(165, 325, 120, 10);
		g.fillRect(100, 25, 3, 50);
	}
}