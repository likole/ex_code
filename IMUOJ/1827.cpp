#include<iostream>
#include<string>
#include<stack>
using namespace std;
//获取符号index
int get_index(char op)
{
	switch (op)
	{
	case '+':
		return 0;
	case '-':
		return 1;
	case '*':
		return 2;
	case '/':
		return 3;
	case '(':
		return 4;
	case ')':
		return 5;
	case '#':
		return 6;
	}
}
//比较符号优先级
int cmp_pri(char a, char b)
{
	int ans[7][7] = 
	{ 
		1,1,-1,-1,-1,1,1,
	    1,1,-1,-1,-1,1,1,
		1,1,1,1,-1,1,1,
		1,1,1,1,-1,1,1,
		-1,-1,-1,-1,-1,0,2,
		1,1,1,1,5,1,1,
		-1,-1,-1,-1,-1,5,0 };
	return ans[get_index(a)][get_index(b)];
}
//运算
int calculate(int a, char op, int b)
{
	switch (op)
	{
	case '+':
		return a + b;
	case '-':
		return a - b;
	case '*':
		return a*b;
	case '/':
		return a / b;
	}
}
//main
int main()
{
	int n;
	string exp;
	cin >> n;
	cin.get();
	for (int j = 0; j < n; j++)
	{
		stack<int> nums;
		stack<char> opers;
		opers.push('#');
		getline(cin, exp);
		if (exp[0] == '-')
		{
			exp = '0' + exp;
		}
		exp += '#';
		int i = 0;
		while(exp[i]!='#'||opers.top()!='#')
		{
			if (exp[i] >= '0'&&exp[i] <= '9')
			{
				nums.push(exp[i] - '0');
				i++;
			}
			else
			{
				char tmp = opers.top();
				if (cmp_pri(tmp,exp[i])==-1)
				{
					opers.push(exp[i]);
					i++;
				}
				else if (cmp_pri(tmp,exp[i]) ==1)
				{
					int num2 = nums.top();
					nums.pop();
					int num1 = nums.top();
					nums.pop();
					char op = opers.top();
					opers.pop();
					nums.push(calculate(num1, op, num2));
				}
				else if (cmp_pri(tmp, exp[i]) == 0)
				{
					opers.pop();
					i++;
				}
			}
		}
		cout << nums.top() << endl;
	}
}