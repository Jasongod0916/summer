import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;

public class search {
    public static void main(String[] args) {
        try {
            // 创建URL对象并指定目标网页的URL
            URL url = new URL("https://tw.news.yahoo.com/%E8%AD%B7%E7%90%86%E5%B8%AB%E9%9B%A2%E8%81%B7%E7%8E%87%E5%8D%81%E5%B9%B4%E6%96%B0%E9%AB%98-%E6%96%B0%E4%BA%BA%E5%87%BA%E8%B5%B0%E5%91%8A%E7%99%BD%EF%BC%9A%E6%B2%92%E5%BF%85%E8%A6%81%E7%82%BA%E4%B8%80%E4%BB%BD%E5%B7%A5%E4%BD%9C%E9%80%99%E9%BA%BC%E7%97%9B%E8%8B%A6-013122710.html");

            // 打开URL连接
            URLConnection connection = url.openConnection();

            // 设置请求头信息（可选）
            connection.setRequestProperty("User-Agent", "Mozilla/5.0");

            // 获取输入流
            BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()));

            // 读取网页内容
            String line;
            boolean isInsideTargetDiv = false;
            while ((line = reader.readLine()) != null) {
                if (line.contains("<div class=\"caas-body\">")) {
                    System.out.print(line.contains("<div class=\"caas-body\">"));
                    isInsideTargetDiv = true;
                } else if (line.contains("</div>") && isInsideTargetDiv) {
                    isInsideTargetDiv = false;
                } else if (isInsideTargetDiv) {
                    // 提取 <p> 标签中的文本
                    String text = line.replaceAll("<.*?>", "").trim();
                    if (!text.isEmpty())
                    {
                        System.out.println(text);
                    }
                }
            }

            // 关闭流
            reader.close();
        } catch (IOException e)
        {
            e.printStackTrace();
        }
    }
}
