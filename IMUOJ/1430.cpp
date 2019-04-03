#include<iostream>
#include<string>
#include<sstream>
using namespace std;
int main()
{
	int a, b,count=0;
	char op, equal;
	string ans;
	while (cin >> a>>op>>b>>equal>>ans)
	{
		if (ans[0] != '?')
		{
			stringstream ss(ans);
			int num;
			ss >> num;
			if (op == '+'&&a + b == num)count++;
			else if (a - b == num) count++;
		}
	}
	cout << count;
}