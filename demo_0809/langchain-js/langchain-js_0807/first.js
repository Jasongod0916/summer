// LLM 模式
// 完成, 接話
// predict
import { OpenAI } from "langchain/llms/openai";

const llm = new OpenAI({
  openAIApiKey: process.env.OPENAI_API_KEY,
  temperature: 0.9,
});

const result = await llm.predict("喔是喔")

console.log(result)