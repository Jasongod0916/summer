package com.example.test;

import javafx.animation.TranslateTransition;
import javafx.application.Application;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.paint.Color;
import javafx.scene.shape.Circle;
import javafx.scene.shape.Rectangle;
import javafx.scene.shape.Polygon;
import javafx.scene.shape.Line;
import javafx.stage.Stage;
import javafx.util.Duration;

public class HelloApplication extends Application {
    @Override
    public void start(Stage primaryStage) {
        Group root = new Group();
        Scene scene = new Scene(root, 400, 800);
        scene.setFill(Color.rgb(255, 255, 204));
        // 馬英九的頭部
        Circle head = new Circle(200, 150, 100, Color.rgb(255, 219, 172));
        root.getChildren().add(head);


        // 馬英九的身體
        Rectangle body = new Rectangle(100, 150, 200, 200);
        body.setFill(Color.rgb(103, 70, 10));
        root.getChildren().add(body);

        // 馬英九的腿
        Rectangle leg1 = new Rectangle(130, 350, 40, 100);
        leg1.setFill(Color.rgb(255, 219, 172));
        root.getChildren().add(leg1);

        Rectangle leg2 = new Rectangle(230, 350, 40, 100);
        leg2.setFill(Color.rgb(255, 219, 172));
        root.getChildren().add(leg2);

        // 馬英九的眼睛
        Circle eye1 = new Circle(180, 120, 15, Color.BLACK);
        Circle eye2 = new Circle(220, 120, 15, Color.BLACK);
        root.getChildren().addAll(eye1, eye2);

        // 馬英九的嘴巴
        Polygon mouth = new Polygon(
                190, 170,
                210, 170,
                200, 180
        );
        mouth.setFill(Color.BLACK);
        root.getChildren().add(mouth);

        // 馬英九的領帶
        Polygon tie = new Polygon(
                150, 200,
                250, 200,
                200, 280
        );
        tie.setFill(Color.BLUE);
        root.getChildren().add(tie);

        // 馬英九的眉毛
        Line eyebrow1 = new Line(160, 90, 200, 110);
        Line eyebrow2 = new Line(240, 90, 200, 110);
        eyebrow1.setStrokeWidth(3);
        eyebrow2.setStrokeWidth(3);
        root.getChildren().addAll(eyebrow1, eyebrow2);

        // 馬英九的眉毛
        Polygon hair = new Polygon(
                170, 60,
                230, 60,
                200, 120
        );

        hair.setFill(Color.BLACK);
        root.getChildren().add(hair);

        // 馬英九的左手
        Circle leftHand = new Circle(80, 240, 50, Color.rgb(255, 219, 172));
        root.getChildren().add(leftHand);

        // 馬英九的右手
        Circle rightHand = new Circle(320, 240, 50, Color.rgb(255, 219, 172));
        root.getChildren().add(rightHand);

        primaryStage.setScene(scene);
        primaryStage.show();

        // 定義跳躍動畫
        TranslateTransition jumpAnimation = new TranslateTransition(Duration.seconds(0.2), root);
        // 設定動畫的起始Y座標為0
        jumpAnimation.setFromY(100);
        jumpAnimation.setToY(-50);
        jumpAnimation.setCycleCount(1000);
        // 啟用動畫的自動反向效果，使得跳躍看起來更加逼真
        jumpAnimation.setAutoReverse(true);


        // 執行跳躍動畫
        jumpAnimation.play();
    }

    public static void main(String[] args) {
        launch(args);
    }
}


