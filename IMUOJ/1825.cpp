#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n, id,index=0;
	string ans[1000];
	cin >> n >> id;
	for (int i = 0; i < n; i++)
	{
		string tmp_name;
		int tmp_id;
		cin >> tmp_name >> tmp_id;
		if (tmp_id == id) { ans[index++] = tmp_name; }
	}
	if (index == 0)cout << "成为第一个点赞的人吧\n";
	else if (index <= 5)
	{
		for (int i = 0; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << ",";
		}
		cout << "觉得很赞";
	}
	else
	{
		for (int i = index-5; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << ",";
		}
		cout << "等5人觉得很赞";
	}
	
}