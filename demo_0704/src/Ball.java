import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Ball extends JPanel
{
    private int x, y; // 球的坐标
    private int dx, dy; // 球的移动速度
    private final int radius; // 球的半径
    private Color color; // 球的颜色
    public Ball(int x, int y, int radius, int dx, int dy, Color color)
    {
        this.x = x;
        this.y = y;
        this.radius = radius;
        this.dx = dx;
        this.dy = dy;
        this.color = color;
    }
    public void move()
    {
        x += dx;
        y += dy;
    }
    public void checkBoundary(int width, int height)
    {
        if (x - radius < 0 || x + radius > width)
        {
            dx = -dx; // 反弹
        }
        if (y - radius < 0 || y + radius > height)
        {
            dy = -dy; // 反弹
        }
    }
    public void paintComponent(Graphics g)
    {
        super.paintComponent(g);
        g.setColor(color);
        g.fillOval(x - radius, y - radius, radius * 2, radius * 2);
    }

    public static void main(String[] args)
    {
        Ball[] balls = new Ball[20];
        for (int i = 0; i < 20; i++)
        {
            int x = (int) (Math.random() * 700) + 50; // 随机生成 x 坐标
            int y = (int) (Math.random() * 500) + 50; // 随机生成 y 坐标
            int radius = (int) (Math.random() * 20) + 10; // 随机生成半径
            int dx = (int) (Math.random() * 5) + 1; // 随机生成 x 方向速度
            int dy = (int) (Math.random() * 5) + 1; // 随机生成 y 方向速度
            Color color = new Color((int) (Math.random() * 256), (int) (Math.random() * 256), (int) (Math.random() * 256)); // 随机生成颜色

            balls[i] = new Ball(x, y, radius, dx, dy, color);
        }

        JFrame frame = new JFrame("Bouncing Balls");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(800, 600);
        JPanel panel = new JPanel()
        {
            public void paintComponent(Graphics g)
            {
                super.paintComponent(g);
                for (Ball ball : balls)
                {
                    ball.paintComponent(g);
                }
            }
        };

        panel.setLayout(null); // 使用自定义布局管理器

        panel.setPreferredSize(new Dimension(800, 600));
        frame.add(panel);
        frame.setVisible(true);

        Timer timer = new Timer(10, new ActionListener()
        {
            public void actionPerformed(ActionEvent e) {
                for (Ball ball : balls) {
                    ball.move();
                    ball.checkBoundary(panel.getWidth(), panel.getHeight());
                }
                panel.repaint();
            }
        });
        timer.start();
    }
}
