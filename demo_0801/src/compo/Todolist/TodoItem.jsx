import React from "react";

const TodoItem = ({ title, completed, onDelete, onComplete }) => {
  return (
    <div>
      <span style={{ textDecoration: completed ? "none" : "line-through" }}>
        {title}
      </span>
      <button className="按鈕" onClick={onDelete}>刪除</button>
      <button className="按鈕2"onClick={onComplete}>{completed ? "完成" : "取消完成"}</button>
    </div>
  );
};
export default TodoItem;
